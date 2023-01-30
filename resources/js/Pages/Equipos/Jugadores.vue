<script setup>
import { Head, Link,useForm } from '@inertiajs/inertia-vue3';
import Nav  from '@/Components/Nav.vue';
const props = defineProps(['jugadores']);
  console.log(props);


</script>
<template>
<Head title="Jugadores" />
 <Nav></Nav>
<div class="flex flex-row">    
  
    <div class="basis-1/4">
    </div>

        <div class="basis-1/2 mt-20"> 
            
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-dark dark:text-dark">
        <thead class="text-xs text-dark uppercase dark:text-dark bg-green-400 green:bg-gray-800">
            <tr>
                <th scope="col" class="px-6 py-3 bg-green-400 green:bg-gray-800">
                    Jugador
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Edad
                </th>
                <th scope="col" class="px-6 py-3">
                  ID
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700" v-for="equipo in jugadores">
                <td scope="row" class="px-6 py-4 font-medium text-dark whitespace-nowrap bg-gray-50 dark:text-dark dark:bg-white">
                    {{ equipo.nombre }}
                </td>
                <td class="px-6 py-4">
                    {{ equipo.apellido_paterno }}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-white">
                    {{ equipo.edad }}
                </td>
                <td class="px-6 py-4">
                    {{ equipo.id }}
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