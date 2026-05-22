<?php
session_start();
include 'header.php';
?>

<div class="container mx-auto px-4 py-8">

    <!-- Success Message -->
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success mb-5">
            <?= $_SESSION['success']; ?>
        </div>
    <?php } ?>

    <div class="card bg-base-100 shadow-xl max-w-4xl mx-auto p-6">

        <!-- Card Header -->
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-center text-slate-700">
                Add User
            </h2>
        </div>

        <!-- Form Start -->
        <form action="./Controllers/AddUserController.php" method="POST" enctype="multipart/form-data">

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
                >

                <?php if (isset($_SESSION['name_err'])) { ?>
                    <span class="text-sm text-red-500 mt-1">
                        <?= $_SESSION['name_err']; ?>
                    </span>
                <?php } ?>

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
                >

                <?php if (isset($_SESSION['email_err'])) { ?>
                    <span class="text-sm text-red-500 mt-1">
                        <?= $_SESSION['email_err']; ?>
                    </span>
                <?php } ?>

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
                >

                <?php if (isset($_SESSION['phone_err'])) { ?>
                    <span class="text-sm text-red-500 mt-1">
                        <?= $_SESSION['phone_err']; ?>
                    </span>
                <?php } ?>

            </div>

            <!-- Description -->
            <div class="mb-5">

                <label for="description" class="block mb-2 font-semibold">
                    Description
                </label>

                <textarea
                    name="description"
                    id="description"
                    class="textarea textarea-bordered w-full"
                ></textarea>

            </div>

            <!-- Experience -->
            <div class="mb-5">

                <label for="experience" class="block mb-2 font-semibold">
                    Experience
                </label>

                <textarea
                    name="experience"
                    id="experience"
                    class="textarea textarea-bordered w-full"
                ></textarea>

            </div>

            <!-- Project -->
            <div class="mb-5">

                <label for="project" class="block mb-2 font-semibold">
                    Project
                </label>

                <textarea
                    name="project"
                    id="project"
                    class="textarea textarea-bordered w-full"
                ></textarea>

            </div>

            <!-- Profile Picture -->
            <div class="mb-4">

                <label for="profile_image" class="block mb-2 font-semibold">
                    Profile Picture
                </label>

                <input
                    type="file"
                    name="profile_image"
                    id="profile_image"
                    class="file-input file-input-bordered w-full"
                    accept="image/*"
                >

                <?php if (isset($_SESSION['profile_image_err'])) { ?>
                    <span class="text-sm text-red-500 mt-1">
                        <?= $_SESSION['profile_image_err']; ?>
                    </span>
                <?php } ?>

            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                name="submit"
                class="btn btn-primary w-full mt-4"
            >
                Submit
            </button>

        </form>

    </div>

</div>

<?php
session_unset();
include 'footer.php';
?>

<!-- Summernote Initialize -->
<script>
    $(document).ready(function () {

        $('#description').summernote({
            placeholder: 'Write your description...',
            tabsize: 2,
            height: 180
        });

        $('#experience').summernote({
            placeholder: 'Write your experience...',
            tabsize: 2,
            height: 180
        });

        $('#project').summernote({
            placeholder: 'Write your project details...',
            tabsize: 2,
            height: 180
        });

    });
</script>