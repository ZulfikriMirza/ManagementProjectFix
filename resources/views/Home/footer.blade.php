 <footer>
     <div class="container-fluid">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-md-5 align-self-center">
                     <h1>ARSITEKKU</h1>
                     <p>Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font</p>
                 </div>
                 <div class="col-md-3 offset-md-1">
                     <div class="credit">
                         <h2>Credit</h2>
                         <a href="http://www.freepik.com">[UserDashboard] Designed by Freepik</a><br>
                         <a href="http://www.freepik.com">[AdminrDashboard] Designed by slidesgo / Freepik</a><br>
                         <a href="http://www.freepik.com">[CART] Designed by slidesgo / Freepik</a><br>
                         <a href="http://www.freepik.com">[403] Designed by stories / Freepik</a><br>
                         <a href="http://www.freepik.com">[404] Designed by stories / Freepik</a><br>
                         <a href="http://www.freepik.com">[500] Designed by stories / Freepik</a><br>
                         <p>[HOME] Photo by <a href="https://unsplash.com/@d_mccullough?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Daniel McCullough</a> on <a href="https://unsplash.com/s/photos/architect?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></p>
                         <p>[CONTACT] Photo by <a href="https://unsplash.com/@thoughtcatalog?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Thought Catalog</a> on <a href="https://unsplash.com/s/photos/contact?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></p>

                     </div>
                 </div>
                 <div class="col-md-3">
                     <h2>Reach Us</h2>
                     <div class="footer-icon-section">
                         @foreach($adminlinks as $item)
                         <a href="{{ $item->link }}" target="_blank"><i class="{{ $item->class }}"></i></a>
                         @endforeach
                     </div>
                     <h2 class="mt-4">Usefull Links</h2>
                     <div class="footer-navbar">
                         <a href="{{ route('aboutus') }}">About Us</a>
                         <a href="{{ route('showcase') }}">Showcase</a>
                         <a href="{{ route('contact') }}">Contact</a>
                         <a href="{{ route('checkout') }}">Checkout</a>
                     </div>

                 </div>
             </div>
             <hr>
             <p class="text-center" style="padding-bottom: 40px;">&copy; Designed and Developed by Mahesa Zulfikri Badu Aul</p>
         </div>
     </div>
 </footer>