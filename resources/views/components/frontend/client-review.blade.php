 <div class=" flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400 ">

     <div class="flex gap-1 items-center justify-center text-yellow-500">
         @for ($i = 1; $i <= 5; $i++)
             @if ($i <= $review->rating)
                 <i class="fa-solid fa-star"></i> <!-- Filled star -->
             @else
                 <i class="fa-regular fa-star"></i> <!-- Empty star -->
             @endif
         @endfor
     </div>

     <p class="body-text-regular-large text-secondary-800">{{ $review->review }} </p>
     <hr class="w-full h-px bg-secondary-400 border-0">
     <div class="flex items-center gap-4">
         <img class="w-16 h-16 rounded-full object-center object-cover" src="{{ asset('upload/client_reviews/ecommerce_1.png') }}" alt="">
         <div>
             <h4 class="sub-title-large-bold text-secondary-950">{{ $review->name }}</h4>
             <p class=" body-text-regular-large text-secondary-800">{{ $review->designation }}</p>
         </div>
     </div>
 </div>
