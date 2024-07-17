<x-auth-view>
    <div class="lg:m-10">
        <form class="relative border border-gray-100 space-y-3 max-w-screen-md mx-auto rounded-md bg-white p-6 shadow-xl lg:p-10" action="{{route('register')}}" method="POST">
            @csrf
        <h1 class="mb-6 text-xl font-semibold lg:text-2xl">Register</h1>

        <div class="grid gap-3 md:grid-cols-2">
          <div>
            <label class=""> First Name </label>
            <input type="text" placeholder="Your Name" name="firstname"  class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />
          </div>
          <div>
            <label class=""> Last Name </label>
            <input type="text" placeholder="Last  Name" name="lastname"class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />
          </div>
        </div>
        <div>
          <label class=""> Username </label>
          <input type="text" placeholder="Username" name="user_name" class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />
        </div>
        <div>
          <label class=""> Email Address </label>
          <input type="email" placeholder="Info@example.com" name="email" class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />
        </div>
        <div>
          <label class=""> Password </label>
          <div class="relative">
          <input type="password" placeholder="******"id="password" name="password"  class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />
          <span class="absolute inset-y-0 right-0 flex items-center pr-2 hover:cursor-pointer">
            <i class="fas fa-eye pt-2" id="togglePassword"></i>
        </span>
    </div>
        </div>

        <div>
            <label class=""> Confirm Password </label>
            <input type="password_confirmation" id="password_confirmation"  placeholder="******" name="password_confirmation" class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />

          </div>


        <div class="checkbox">
          <input type="checkbox" id="chekcbox1" name="agree" checked="" />
          <label for="checkbox1">I agree to the <a href="#" target="_blank" class="text-blue-600"> Terms and Conditions </a> </label>
        </div>

        <div>
          <button type="submit" class="mt-5 w-full rounded-md bg-blue-600 p-2 text-center font-semibold text-white">Get Started</button>
        </div>
      </form>

      </div>
</x-auth-view>
