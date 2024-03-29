
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center fixed z-10 p-2 mt-16 ms-3 text-sm bg-red-500 text-white rounded-lg sm:hidden hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    {{-- <span class="sr-only">Open sidebar</span> --}}
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="logo-sidebar" class="fixed border-r-4 border-red-500 top-14 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      
       <ul class="space-y-2 font-medium">
          
          <li>
             <a href="#" class="flex items-center p-2 pl-7 text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-red-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                   <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                {{-- <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> --}}
             </a>
          </li>

          
          <div class="flex items-center p-2 pl-7 gap-3 border-t-2"> 
            <span class="border-l-8 border-red-500 text-red-500 font-bold p-1">Patient Management</span>
          </div>

          <li>
             <a href="#" class="flex items-center text-gray-900 rounded-lg p-2 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">  
                <i class="fa-solid fa-folder-open flex-shrink-0 ms-5 w-5 h-5 text-blue-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                <span class="flex-1 ms-2 whitespace-nowrap">View / Edit Patients</span>
                {{-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center text-gray-900 rounded-lg p-2 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">  
                <i class="fa-solid fa-person-circle-plus flex-shrink-0 ms-5 w-5 h-5 text-green-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                <span class="flex-1 ms-2 whitespace-nowrap">Add New Patients</span>
                {{-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center text-gray-900 rounded-lg p-2 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">  
                <i class="fa-solid fa-person-circle-minus flex-shrink-0 ms-5 w-5 h-5 text-red-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                <span class="flex-1 ms-2 whitespace-nowrap">Remove Patients</span>
                {{-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
             </a>
          </li>

          <div class="flex items-center p-2 pl-7 gap-3 border-t-2"> 
            <span class="border-l-8 border-red-500 text-red-500 font-bold p-1"> Seminar Access</span>
          </div>

          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fa-solid fa-calendar-plus flex-shrink-0 ms-5 w-5 h-5 text-blue-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">Seminar Schedule</span>
             </a>
          </li>

          <div class="flex items-center p-2 pl-7 gap-3 border-t-2"> 
            <span class="border-l-8 border-red-500 p-1 text-red-500 font-bold">Record Management</span>
          </div>

          <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <i class="fa-solid fa-book-medical flex-shrink-0 ms-5 w-5 h-5 text-blue-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Treatment Records</span>
            </a>
         </li>

         <div class="border-b-2"></div>
          
       </ul>
    </div>
 </aside>
 
 
 