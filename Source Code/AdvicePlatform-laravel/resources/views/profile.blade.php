@extends('layout.default')
    @section('content')
    <div class="flex flex-col items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900 relative">
      <!-- Background Image -->
      <div class="absolute bottom-0 right-8 mr-[10.5rem] z-0">
        <img src="../assets/img/school-students.png" alt="">
      </div>

      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg dark:bg-gray-800 mt-8 z-10"
      >
      <h1 class="text-center text-[34px] font-semibold text-[#2B819F]">Plymouth University Guide Website</h1>

        <div class="flex flex-col rounded-none max-w-[1200px]">
          <div
            class="flex flex-col justify-center px-11 py-20 w-full bg-emerald-50 rounded-[30px] max-md:px-5 max-md:max-w-full"
          >
            <div class="flex flex-col max-md:max-w-full">
              <div
                class="flex flex-col self-center px-9 pb-3 max-w-full text-center rounded-none w-[343px] max-md:px-5"
              >
                <h1 class="self-center text-3xl font-semibold text-black">
                  Profile
                </h1>
                <p class="mt-2.5 text-base font-medium text-black text-opacity-60">
                  Update Your profile
                </p>
              </div>
              <form class="flex flex-col mt-8 w-full max-md:max-w-full">
                <!-- Profile Image -->
                <div class="flex justify-center mb-6">
                  <img
                  src="../assets/img/profile.jpg"
                    alt="Profile Image"
                    class="w-24 h-24 rounded-full border border-solid border-neutral-400 border-opacity-30"
                  />
                </div>

                <div class="flex gap-6 w-full max-md:max-w-full">
                  <!-- Left Column -->
                  <div class="flex flex-col w-full text-lg font-medium text-neutral-400 max-md:max-w-full">
                    <!-- Name -->
                    <input
                      type="text"
                      id="name"
                      name="name"
                      value="John Doe"
                      class="px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 max-md:max-w-full"
                      placeholder="Name"
                      required
                    />

                    <!-- Email -->
                    <input
                      type="email"
                      id="email"
                      name="email"
                      value="jD6nI@example.com"
                      class="mt-4 px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 max-md:max-w-full"
                      placeholder="Email"
                      required
                    />

                    <!-- Student in Plymouth University Checkbox -->
                    <div class="flex flex-wrap gap-5 justify-between px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 mt-4 max-md:max-w-full">
                      <label for="is-student" class="text-gray-700">Student in Plymouth University</label>
                      <div class="flex gap-2 items-center">
                        <label class="flex gap-2 items-center">
                          <input type="radio" name="is-student" value="yes" class="shrink-0 my-auto w-6 h-6"  checked/> Yes
                        </label>
                        <label class="flex gap-2 items-center">
                          <input type="radio" name="is-student" value="no" class="shrink-0 my-auto w-6 h-6" /> No
                        </label>
                      </div>
                    </div>

                    <!-- Description -->
                    <textarea
                      id="description"
                      name="description"
                      class="mt-4 px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 max-md:max-w-full"
                      placeholder="Description"
                      rows="3"

                    >Write a description.</textarea>
                  </div>

                  <!-- Right Column -->
                  <div class="flex flex-col w-full text-lg font-medium text-neutral-400 max-md:max-w-full">
                    <!-- Phone Number -->
                    <input
                      type="text"
                      id="phone"
                      name="phone"
                      value="+1 (123) 456-7890"
                      class="px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 max-md:max-w-full"
                      placeholder="Phone Number"
                      required
                    />

                    <!-- Password -->
                    <input
                      type="password"
                      id="password"
                      name="password"
                      class="mt-4 px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 max-md:max-w-full"
                      placeholder="Password"
                      value="1233445"
                      required
                    />

                    <!-- Course Dropdown -->
                    <div class="flex flex-wrap gap-5 justify-between px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 mt-4 max-md:max-w-full">
                      <select id="course" name="course" class="grow bg-transparent border-none outline-none">
                        <option value="" disabled >Choose Course</option>
                        <option value="math">Engineering & Mathematics</option>
                        <option value="science">Computer Science</option>
                        <option value="history"selected>Business</option>
                        <option value="medical">Medical School</option>
                        <option value="psychology">Psychology</option>
                        <option value="art">Art, Design and Architecture</option>
                      </select>
                    </div>

                    <!-- Dark Mode / Light Mode Toggle -->
                    <div class="flex flex-wrap gap-5 justify-between px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 mt-4 max-md:max-w-full">
                      <!-- <label for="is-student" class="text-gray-700">Student in Plymouth University</label> -->
                      <div class="flex gap-2 items-center">
                        <label class="flex gap-2 items-center">
                          <input type="radio" name="is-student" value="yes" class="shrink-0 my-auto w-6 h-6" /> Dark Mode
                        </label>
                        <label class="flex gap-2 items-center">
                          <input type="radio" name="is-student" value="no" class="shrink-0 my-auto w-6 h-6"  checked/> Light Mode
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Logout Button -->
                <button type="button" class="mt-7 w-full px-4 py-2 text-2xl font-semibold text-white bg-red-600 rounded-xl max-md:px-5">
                  Logout
                </button>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
