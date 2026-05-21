<?php include 'header.php'; ?>

<div class="container mx-auto px-4 py-8">

    <div class="card bg-base-100 shadow-xl max-w-4xl mx-auto p-6">

        <!-- Card Header -->
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-center text-slate-700">
                Add User
            </h2>
        </div>

        <!-- Form Start -->
        <form action="add-user.php" method="POST">

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
                    placeholder="Enter your phone number"
                    required
                >
            </div>

            <!-- Description -->
            <div class="mb-5">
                <label for="description" class="block mb-2 font-semibold">
                    Description
                </label>

                <textarea
                    name="description"
                    id="description"
                ></textarea>

                <p class="text-sm text-gray-500 mt-1">
                    Write a short description about yourself.
                </p>
            </div>

            <!-- Experience -->
            <div class="mb-5">
                <label for="experience" class="block mb-2 font-semibold">
                    Experience
                </label>

                <textarea
                    name="experience"
                    id="experience"
                ></textarea>

                <p class="text-sm text-gray-500 mt-1">
                    Add your work experience or skills.
                </p>
            </div>

            <!-- Project -->
            <div class="mb-5">
                <label for="project" class="block mb-2 font-semibold">
                    Project
                </label>

                <textarea
                    name="project"
                    id="project"
                ></textarea>

                <p class="text-sm text-gray-500 mt-1">
                    Mention your completed or ongoing projects.
                </p>
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                name="submit"
                class="btn btn-primary w-full mt-4"
            >
                Add User
            </button>

        </form>
        <!-- Form End -->

    </div>

</div>

<?php include 'footer.php'; ?>

<!-- Summernote Initialize -->
<script>
    $(document).ready(function () {

        // Description Editor
        $('#description').summernote({
            placeholder: 'Write your description...',
            tabsize: 2,
            height: 180
        });

        // Experience Editor
        $('#experience').summernote({
            placeholder: 'Write your experience...',
            tabsize: 2,
            height: 180
        });

        // Project Editor
        $('#project').summernote({
            placeholder: 'Write your project details...',
            tabsize: 2,
            height: 180
        });

    });
</script>
