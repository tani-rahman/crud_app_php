<?php
 include 'header.php'; 
?>

<div class="container mx-auto px-4">
    
    <div class="card bg-base-100 shadow-xl max-w-3xl mx-auto mt-6 p-6">

        <div class="card-header mb-5">
            <h3 class="text-center text-3xl font-bold text-slate-700">
                Add User
            </h3>
        </div>

        <div class="card-body">

            <form action="add-user.php" method="post">

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block mb-2 font-semibold">
                        Name
                    </label>

                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="input input-bordered w-full" 
                        placeholder="Enter your name"
                        required
                    >
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block mb-2 font-semibold">
                        Email
                    </label>

                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        class="input input-bordered w-full" 
                        placeholder="Enter your email"
                        required
                    >
                </div>

                <!-- Phone -->
                <div class="mb-4">
                    <label for="phone" class="block mb-2 font-semibold">
                        Phone
                    </label>

                    <input 
                        type="text" 
                        name="phone" 
                        id="phone" 
                        class="input input-bordered w-full" 
                        placeholder="Enter phone number"
                        required
                    >
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block mb-2 font-semibold">
                        Description
                    </label>

                    <textarea 
                        name="description" 
                        id="description" 
                        rows="4"
                        class="textarea textarea-bordered w-full"
                        placeholder="Write short description about yourself"
                    ></textarea>

                    <p class="text-sm text-gray-500 mt-1">
                        Summarize your profile or personal information.
                    </p>
                </div>

                <!-- Experience -->
                <div class="mb-4">
                    <label for="experience" class="block mb-2 font-semibold">
                        Experience
                    </label>

                    <textarea 
                        name="experience" 
                        id="experience" 
                        rows="4"
                        class="textarea textarea-bordered w-full"
                        placeholder="Write your work experience"
                    ></textarea>

                    <p class="text-sm text-gray-500 mt-1">
                        Add your job, internship, or skills experience.
                    </p>
                </div>

                <!-- Project -->
                <div class="mb-4">
                    <label for="project" class="block mb-2 font-semibold">
                        Project
                    </label>

                    <textarea 
                        name="project" 
                        id="project" 
                        rows="4"
                        class="textarea textarea-bordered w-full"
                        placeholder="Write your project details"
                    ></textarea>

                    <p class="text-sm text-gray-500 mt-1">
                        Mention your completed or ongoing projects.
                    </p>
                </div>

                <button 
                    type="submit" 
                    name="submit" 
                    class="btn btn-primary w-full mt-4"
                >
                    Add User
                </button>

            </form>

        </div>

    </div>

</div>