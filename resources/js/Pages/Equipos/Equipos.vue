
<script>
import { Head, Link,useForm } from '@inertiajs/inertia-vue3';
import Nav  from '@/Components/Nav.vue';

const form = useForm();

export default {
  components: {
    Nav,Link
  },
  props: {
    equipos: Array
  },
  methods: {
    destroy(id) {
      if (confirm("¿Estás seguro de que quieres eliminar?")) {
        form.delete(route('eliminar.equipo', id));
      }
    }
  }
};
</script>

<template>
     <head>
      <title>Mi Aplicación</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
 
 <Nav></Nav>

 <div class="flex flex-row">    
  <div class="basis-1/4 mt-20 ml-8">
    
    <div>
      <Link :href="route('formulario.crear')" type="button" 
      class="text-black bg-gradient-to-r from-green-400 via-green-300 to-green-300 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-600 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Crear Equipo</Link>
  </div>
  


  </div>

<div class="basis-1/2 mt-20"> 
  
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
       <table class="w-full text-sm text-left text-dark dark:text-dark">
        <thead class="text-xs text-dark uppercase dark:text-dark bg-green-400 green:bg-gray-800">
            <tr>
              <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre del Equipo
                </th>
                <th scope="col" class="px-6 py-3">
                    Propetario
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
                <th scope="col" class="px-6 py-3">
                  Acciones
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody class="text-black">
          <tr class="bg-white dark:bg-white" v-for="equipo in equipos" >
          <td class="px-6 py-4 ">{{ equipo.id }} </td>
          <td class="px-6 py-4">{{ equipo.nombre }}</td>
          <td class="px-6 py-4">{{ equipo.propietario }}</td>
          <td class="px-6 py-4">{{ equipo.estado }}</td>
          <td class="px-4 py-3"> 
            <Link type="button" 
            :href="route('ver.jugadoresEquipos',equipo.id)"
            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-xs font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
             Jugadores
            </span>
            </Link>
          </td>
          <td class="px-6 py-4">
            <Link :href="route('editar.equipo',equipo.id)"
             type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800" > <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
              Editar
              </span>
             </Link>
          </td>
          <td>
            <button type="button" @click="destroy(equipo.id)"  class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-300 to-red-400 group-hover:from-red-600 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
         Eliminar  </span></button>
          </td>
          <td class="px-6 py-4">
            <Link :href="route('formulario.equipoJugador',equipo.id)"   class="font-medium text-dark dark:text-dark hover:underline">Asignar Jug.</Link>
          </td>
        </tr>
        </tbody>
    </table>
 

  </div>

  </div>

    </div>
    <body>
      
    </body>
  </template>
