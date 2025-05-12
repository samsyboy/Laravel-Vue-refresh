<template>
  <div>
    <!-- On affiche le composant ChapterView si showStory est true -->
    <!-- On lui passe l'ID du chapitre de départ (1) et on écoute l'événement 'restart' -->
    <ChapterView :startChapterId="1" v-if="showStory" @restart="reset" />
    <!-- On affiche le bouton pour commencer l'histoire si showStory est false -->
    <button v-if="!showStory" @click="startStory">Commencer l'aventure</button>
  </div>
</template>

<script setup>
// On importe les fonctionnalités nécessaires de Vue
import { ref } from 'vue';
// On importe le composant ChapterView
import ChapterView from './ChapterView.vue';

// On crée une référence réactive pour gérer l'affichage de l'histoire
const showStory = ref(false);

// Fonction pour commencer l'histoire
function startStory() {
  showStory.value = true;
}

// Fonction pour réinitialiser l'histoire (appelée quand on clique sur "Recommencer")
function reset() {
  showStory.value = false;
}
</script>