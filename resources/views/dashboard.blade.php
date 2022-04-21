<x-app-layout>
<x-slot name="header">

    </x-slot>

    <div class="container-fluid ">
        <div class="row">
          
          <div class="col-md-9 ">
            <div class="card">
              <h4 class="card-header bg-gray overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #008B8B; color: #fff;"> <marquee behavior="" direction="">Welcome To POS Management System</marquee></h4>
                  <div class="card-body p-6 bg-white border-b border-gray-200">
                   
                  </div>
              
            </div>
          </div>


         <div class="col-md-3">
            <div class="card">
              <div class="card-header bg-gray overflow-hidden shadow-sm sm:rounded-lg">{{ __('Dashboard') }}</div>
                <div class="card-body p-6 bg-white border-b border-gray-200">
                  
                </div>
              
           </div>
         </div>
         
        </div>
    </div>
</x-app-layout>
