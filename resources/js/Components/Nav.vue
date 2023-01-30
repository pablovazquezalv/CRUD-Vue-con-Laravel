<script setup>
import { Head, Link,useForm,Body } from '@inertiajs/inertia-vue3';
</script>
<template>
  
    <Head title="Editar"/>
   <Body   />
    <nav class="px-2 sm:px-4 py-2.5 dark:bg-green-400 fixed w-full z-20 top-0 left-0 border-b">
      <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="" class="flex items-center">
          <img src="" class="h-6 mr-3 sm:h-9" >
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CRUD</span>
      </a>
      <div class="flex md:order-2">
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm 
        
            text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
          <li>
            <Link :href="route('ver.jugadores')"  class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-dark md:hover:bg-transparent md:hover:text-dark md:p-0 md:dark:hover:text-dark dark:text-dark dark:hover:bg-dark dark:hover:text-dark md:dark:hover:bg-transparent dark:border-gray-700">Jugadores</Link>
          </li>
          <li>
            <Link :href="route('equipos.inicio')" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-dark md:hover:bg-transparent md:hover:text-dark md:p-0 md:dark:hover:text-dark dark:text-dark dark:hover:bg-dark dark:hover:text-dark md:dark:hover:bg-transparent dark:border-gray-700">Equipos</Link>
          </li>
        
        </ul>
      </div>
      </div>
    </nav>
    </template>