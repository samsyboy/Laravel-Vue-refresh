<template>
  <div v-if="chapter">
    <h2>{{ chapter.title }}</h2>
    <p>{{ chapter.content }}</p>

    <ul v-if="chapter.choices && chapter.choices.length">
      <li v-for="choice in chapter.choices" :key="choice.id">
        <button @click="selectChoice(choice)">
          {{ choice.text }}
        </button>
      </li>
    </ul>
    <div v-else>
      <p>Fin du parcours.</p>
      <button @click="restart">Recommencer</button>
    </div>

    <!-- Jauges sous les choix -->
    <div class="gauges">
      <div class="gauge">
        <h3>Confiance en soi</h3>
        <div class="gauge-bar">
          <div class="gauge-fill" :style="{ width: chapter.self_confidence + '%', backgroundColor: getGaugeColor(chapter.self_confidence) }"></div>
        </div>
        <span>{{ chapter.self_confidence }}%</span>
      </div>
      <div class="gauge">
        <h3>Risque médical</h3>
        <div class="gauge-bar">
          <div class="gauge-fill" :style="{ width: chapter.medical_risk + '%', backgroundColor: getGaugeColor(chapter.medical_risk) }"></div>
        </div>
        <span>{{ chapter.medical_risk }}%</span>
      </div>
    </div>
  </div>
  <div v-else>
    <p>Chargement...</p>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
  startChapterId: {
    type: Number,
    required: true
  }
});

const emit = defineEmits(['restart']);
const chapter = ref(null);

async function fetchChapter(id) {
  const response = await fetch(`/api/chapters/${id}`);
  chapter.value = await response.json();
}

// On modifie cette fonction pour enregistrer le choix côté backend
async function selectChoice(choice) {

  // Assuming you have a way to get the CSRF token, for example, from a meta tag:
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  await fetch('/api/select-choice', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
    },
    body: JSON.stringify({
      self_confidence_impact: choice.self_confidence_impact,
      medical_risk_impact: choice.medical_risk_impact
    }),
  });
  fetchChapter(choice.next_chapter_id);
}

// On modifie cette fonction pour réinitialiser l'historique côté backend
async function restart() {
// Assuming you have a way to get the CSRF token, for example, from a meta tag:
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


  await fetch('/api/select-choice', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
    },
    body: JSON.stringify({
      reset: true
    })
  });
  emit('restart');
}

function getGaugeColor(value) {
  if (value <= 33) return '#4CAF50';
  if (value <= 66) return '#FFC107';
  return '#F44336';
}

onMounted(() => {
  fetchChapter(props.startChapterId);
});
</script>

<style scoped>
.gauges {
  margin: 20px 0;
  display: flex;
  gap: 20px;
}
.gauge {
  flex: 1;
  text-align: center;
}
.gauge h3 {
  margin-bottom: 10px;
  font-size: 1rem;
}
.gauge-bar {
  width: 100%;
  height: 20px;
  background-color: #e0e0e0;
  border-radius: 10px;
  overflow: hidden;
}
.gauge-fill {
  height: 100%;
  transition: width 0.3s ease;
}
.gauge span {
  display: block;
  margin-top: 5px;
  font-weight: bold;
}
</style>