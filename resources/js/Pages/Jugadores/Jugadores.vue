<script setup>
import Nav  from '@/Components/Nav.vue';
import { Head, Link,useForm } from '@inertiajs/inertia-vue3';
const props = defineProps(['jugadores']);
  console.log(props);

  const form = useForm();
function destroy(id) 
{
    if (confirm("Are you sure you want to Delete"))
     {
        form.delete(route('eliminar.jugador', id));
     }
}
</script>
<template>
    <Nav></Nav>
    <div class="flex flex-row">    
  <div class="basis-1/4 mt-20 ml-8">
    <Link :href="route('formulario.crearJ')"
             type="button" 
             class="text-black bg-gradient-to-r from-yellow-400 via-yellow-300 to-green-300 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-600 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Crear Jugador</Link>
  
  </div>

  <div class="basis-1/2 mt-20 "> 
  
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
     <table class="w-full text-sm text-left text-dark dark:text-dark">
      <thead class="text-xs text-dark uppercase dark:text-dark bg-yellow-300 green:bg-gray-800">
          <tr>
            <th scope="col" class="px-6 py-3">
                  ID
              </th>
              <th scope="col" class="px-6 py-3">
                Nombre
              </th>
              <th scope="col" class="px-6 py-3">
                  Apellido Paterno
              </th>
              <th scope="col" class="px-6 py-3">
                Apellido Materno
              </th>
              <th scope="col" class="px-6 py-3">
              Edad
              </th>
              <th scope="col" class="px-6 py-3">
              Equipo
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
        <tr class="bg-white dark:bg-white" v-for="jugador in jugadores" >
        <td class="px-6 py-4 ">{{ jugador.id }}  </td>
        <td class="px-6 py-4">{{ jugador.nombre }} </td>
        <td class="px-6 py-4">{{ jugador.apellido_paterno }} </td>
        <td class="px-6 py-4">{{ jugador.apellido_materno }} </td>
        <td class="px-6 py-4">{{ jugador.edad }} </td>
        <td class="px-6 py-4">{{ jugador.team }} </td>
        
        <td class="px-6 py-4">
          <Link 
           type="button" :href="route('editar.jugador',jugador.id)" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800" > <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Editar
            </span>
           </Link>
           

        </td>
        <td>
          <button type="button" @click="destroy(jugador.id)"  class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-300 to-red-400 group-hover:from-red-600 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800"><span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
       Eliminar  </span></button>

        </td>
        <td class="px-6 py-4">
        </td>
      </tr>
      </tbody>
  </table>
</div>

</div>
<div class="basis-1/4">

</div>

    </div>
</template>