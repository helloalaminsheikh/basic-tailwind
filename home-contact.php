<!-- Contact Us -->
<section id="contact" class="bg-white bg-fixed bg-no-repeat bg-cover" style="background-image: url(images/background01.png);">
	<div class="container mx-auto">
		<div class="text-center">
			<h6 class="text-blue-500 mb-0 fw-bold">Find Me</h6>
			<h1 class="uppercase text-4xl font-bold mb-5" >contact me now</h1>
		</div> 
		<form class="grid grid-cols-12 gap-4 px-3 sm:px-0 py-8" name="contactForm" onsubmit="if(confirm('Do You Want To Submit This ?')){ if(myValidation() == false) {return false;} } else{event.preventDefault(); return false; }">
			<div class="col-span-12 sm:col-span-6">
				<div class="border border-gray-700 mb-2">
					<input class="w-full bg-transparent p-2" type="text" name="name" placeholder="Enter Your Name" onfocus="Focus(this)"> 
					<span id="nameError"></span>
				</div>
				<div class="border border-gray-700 mb-2">
					<input class="w-full bg-transparent p-2"  type="email" name="email" placeholder="Enter Your Email" onfocus="Focus(this)"> 
					<span id="emailError"></span>
				</div>
				<div class="border border-gray-700 mb-2 ">
					<input class="w-full bg-transparent p-2"  type="text" name="phone"  placeholder="Enter Your Number" onfocus="Focus(this)">
					<span id="phoneError"></span>
				</div> 
			</div>
			<div class="col-span-12 sm:col-span-6 ">
				<div class="">
					<textarea class="border border-gray-700 w-full bg-transparent p-2.5" rows="5"  name="message" placeholder="Type Your Message" onfocus="Focus(this)"></textarea>
					<span id="messageError"></span>
				</div>
			</div>
			<div class="col-span-12 text-center">
				<div class="my-3 flex justify-center">
					<button type="submit" class="bg-blue-400 py-2 px-4 text-white rounded-lg bg-sky-500 hover:bg-blue-500" id="sub-btn">submit</button>
				</div>
			</div>
		</form>
		<!-- address -->
		<div class="grid grid-cols-12 mt-5 text-center text-white" id="address">
			<div class="col-span-4 col-sm-4 col-">
				<h1 class="text-blue-500 text-4xl" ><i class="far fa-map"></i></h1>
				<p class="text-black">Address <br> Jatrabari Dhaka</p>
			</div>
			<div class="col-span-4 col-sm-4 col-6">
				<h1 class="text-blue-500 text-4xl" ><i class="far fa-envelope"></i></h1>
				<p class="text-black">Email <br> alamin@gmail.com</p>
			</div>
			<div class="col-span-4 col-sm-4 col-6">
				<h1 class="text-blue-500 text-4xl" ><i class="fas fa-mobile-alt"></i></h1> 
				<p class="text-black">Phone <br> 01575136768</p>
			</div>
		</div>
	</div>
</section>