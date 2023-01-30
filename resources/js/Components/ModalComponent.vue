<template>
    <div>
      <div class="modal" v-if="showModal">
        <div class="modal-background"></div>
        <div class="modal-content">
          <p>¿Estás seguro de que quieres eliminar?</p>
        </div>
        <button class="button is-danger" @click="destroy">Eliminar</button>
        <button class="button" @click="closeModal">Cancelar</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: ['equipoId'],
    data() {
      return {
        showModal: false,
      };
    },
    methods: {
      destroy() {
        form.delete(route('eliminar.equipo', this.equipoId));
        this.closeModal();
      },
      closeModal() {
        this.showModal = false;
      },
    },
  };
  </script>
  
  <style>
  .modal {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
  }
  
  .modal-background {
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
  }
  
  .modal-content {
    background-color: white;
    padding: 1rem;
    border-radius: 5px;
  }
  
  button {
    margin-right: 1rem;
  }
  </style>
  