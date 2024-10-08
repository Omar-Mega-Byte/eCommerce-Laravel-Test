<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['post', 'full' => false]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['post', 'full' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


<?php $__env->startSection('title', 'E-commerce Dashboard'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container mx-auto">
    <!-- Welcome Section -->
    <div class="mb-10">
        <h1 class="text-3xl font-extrabold text-blue-800 font-pacifico">Welcome, <?php echo e(auth()->user()->name); ?></h1>
        <p class="text-gray-600 font-lobster">You have <?php echo e($posts->total()); ?> posts</p>
        <p class="text-gray-600">Here's an overview of your eCommerce activities.</p>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-gradient-to-r from-blue-400 to-blue-500 text-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105" x-data="{ tooltip: false }" @mouseover="tooltip = true" @mouseleave="tooltip = false">
            <h2 class="text-lg font-semibold font-bebas">Total Sales</h2>
            <p class="text-2xl font-bold font-righteous">$<span id="totalSales">123,456.78</span></p>
            <div x-show="tooltip" class="absolute bg-gray-700 text-white text-xs rounded py-1 px-4 right-0 bottom-full mb-2">Total revenue generated</div>
        </div>
        <div class="bg-gradient-to-r from-green-400 to-green-500 text-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105" x-data="{ tooltip: false }" @mouseover="tooltip = true" @mouseleave="tooltip = false">
            <h2 class="text-lg font-semibold font-bebas">New Orders</h2>
            <p class="text-2xl font-bold font-righteous"><span id="newOrders">150</span></p>
            <div x-show="tooltip" class="absolute bg-gray-700 text-white text-xs rounded py-1 px-4 right-0 bottom-full mb-2">Orders received today</div>
        </div>
        <div class="bg-gradient-to-r from-purple-400 to-purple-500 text-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105" x-data="{ tooltip: false }" @mouseover="tooltip = true" @mouseleave="tooltip = false">
            <h2 class="text-lg font-semibold font-bebas">Total Customers</h2>
            <p class="text-2xl font-bold font-righteous"><span id="totalCustomers">1,234</span></p>
            <div x-show="tooltip" class="absolute bg-gray-700 text-white text-xs rounded py-1 px-4 right-0 bottom-full mb-2">Number of registered customers</div>
        </div>
    </div>

    <!-- Sessions -->
    <?php if(session('success')): ?>
        <?php if (isset($component)) { $__componentOriginalc115b9ff12b76915cc22a6040e27d5b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flashMsg','data' => ['msg' => ''.e(session('success')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flashMsg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['msg' => ''.e(session('success')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7)): ?>
<?php $attributes = $__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7; ?>
<?php unset($__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc115b9ff12b76915cc22a6040e27d5b7)): ?>
<?php $component = $__componentOriginalc115b9ff12b76915cc22a6040e27d5b7; ?>
<?php unset($__componentOriginalc115b9ff12b76915cc22a6040e27d5b7); ?>
<?php endif; ?>
    <?php elseif(session('delete')): ?>
        <?php if (isset($component)) { $__componentOriginalc115b9ff12b76915cc22a6040e27d5b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flashMsg','data' => ['msg' => ''.e(session('delete')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flashMsg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['msg' => ''.e(session('delete')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7)): ?>
<?php $attributes = $__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7; ?>
<?php unset($__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc115b9ff12b76915cc22a6040e27d5b7)): ?>
<?php $component = $__componentOriginalc115b9ff12b76915cc22a6040e27d5b7; ?>
<?php unset($__componentOriginalc115b9ff12b76915cc22a6040e27d5b7); ?>
<?php endif; ?>
    <?php elseif(session('update')): ?>
        <?php if (isset($component)) { $__componentOriginalc115b9ff12b76915cc22a6040e27d5b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flashMsg','data' => ['msg' => ''.e(session('update')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flashMsg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['msg' => ''.e(session('update')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7)): ?>
<?php $attributes = $__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7; ?>
<?php unset($__attributesOriginalc115b9ff12b76915cc22a6040e27d5b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc115b9ff12b76915cc22a6040e27d5b7)): ?>
<?php $component = $__componentOriginalc115b9ff12b76915cc22a6040e27d5b7; ?>
<?php unset($__componentOriginalc115b9ff12b76915cc22a6040e27d5b7); ?>
<?php endif; ?>
    <?php endif; ?>

<!-- Posts Form -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-6">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Create a New Post</h2>
    <form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <!-- Title Field -->
    <div class="mb-6">
        <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
        <input type="text" id="title" name="title" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 font-bold text-xs italic mt-2"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Body Field -->
    <div class="mb-6">
        <label for="body" class="block text-gray-700 font-medium mb-2">Body</label>
        <textarea id="body" name="body" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" rows="5"></textarea>
        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 font-bold text-xs italic mt-2"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    
    <div class="mb-4">
        <label for="image">Cover photo</label>
        <input type="file" name="image" id="image">
    </div>

    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 font-bold text-xs italic mt-2"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300">Submit</button>
    </div>
    </form>
</div>

<!-- Latest Posts -->
<div class="bg-gray-50 p-8 rounded-lg shadow-2xl mb-6 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-4xl mx-auto">
        <!-- Page Title -->
        <h1 class="text-6xl font-extrabold mb-12 text-blue-900 text-center font-oswald">Your Posts</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Post Card -->
                <div class="relative bg-white p-6 rounded-lg transform hover:scale-105 transition-transform duration-300 overflow-hidden break-words">
                    <!-- Post Content Wrapper -->
                    <div class="rounded-xl mb-8 px-6 py-10 bg-white overflow-hidden break-words">
                        <!-- Cover Photo -->
                        <div class="overflow-hidden">
                            <?php if($post->image): ?>
                                <img class="rounded-lg mb-6 w-full h-64 object-cover" src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>">
                            <?php else: ?>
                                <img class="rounded-lg mb-6 w-full h-64 object-cover" src="<?php echo e(asset('storage/posts_images/No image.jpg')); ?>" alt="<?php echo e($post->title); ?>">
                            <?php endif; ?>
                        </div>
                        <!-- Post Title -->
                        <h3 class="text-2xl font-bold text-gray-900 font-varelaRound"><?php echo e($post->title); ?></h3>
                        <!-- Post Metadata -->
                        <div class="text-xs text-gray-500 mb-4 font-pacifico">
                            <span class="font-shadowsIntoLight">Posted <?php echo e($post->created_at->diffForHumans()); ?> by </span>
                            <a class="text-blue-700 hover:underline" href="<?php echo e(route('posts.users', $post->user)); ?>"><?php echo e($post->user->name); ?></a>
                        </div>
                        <span class="text-gray-700 font-arvo"><?php echo e(Str::words($post->body, 20)); ?></span>
                        <a class="text-blue-400 hover:underline font-workSans" href="<?php echo e(route('posts.show', $post)); ?>">Read more &rarr;</a>
                    </div>
                    <!-- Update and Delete Buttons -->
                    <div class="absolute bottom-4 right-4 flex space-x-2">
                        <a class="bg-gradient-to-r from-green-400 to-green-600 text-white px-5 py-3 rounded-full hover:from-green-500 hover:to-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 transition duration-300" href="<?php echo e(route('posts.edit', $post)); ?>">Update</a>
                        <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="bg-gradient-to-r from-red-400 to-red-600 text-white px-5 py-3 rounded-full hover:from-red-500 hover:to-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-300">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Pagination Links -->
        <div class="mt-8">
            <?php echo e($posts->links()); ?>

        </div>
    </div>
</div>

<!-- Sales Chart -->
<div class="bg-white p-4 rounded-lg shadow mb-6">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Sales Chart</h2>
    <canvas id="salesChart"></canvas>
</div>

<!-- Recent Orders Table -->
<div class="bg-white p-4 rounded-lg shadow mb-6">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Orders</h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">Order ID</th>
                <th class="py-2 px-4 border-b border-gray-200">Customer</th>
                <th class="py-2 px-4 border-b border-gray-200">Total</th>
                <th class="py-2 px-4 border-b border-gray-200">Status</th>
                <th class="py-2 px-4 border-b border-gray-200">Date</th>
                <th class="py-2 px-4 border-b border-gray-200">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">1234</td>
                <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                <td class="py-2 px-4 border-b border-gray-200">$123.45</td>
                <td class="py-2 px-4 border-b border-gray-200">Shipped</td>
                <td class="py-2 px-4 border-b border-gray-200">2024-07-01</td>
                <td class="py-2 px-4 border-b border-gray-200">
                    <button class="text-blue-600 hover:text-blue-800" @click="openModal('1234')">View</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">1235</td>
                <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
                <td class="py-2 px-4 border-b border-gray-200">$67.89</td>
                <td class="py-2 px-4 border-b border-gray-200">Processing</td>
                <td class="py-2 px-4 border-b border-gray-200">2024-07-01</td>
                <td class="py-2 px-4 border-b border-gray-200">
                    <button class="text-blue-600 hover:text-blue-800" @click="openModal('1235')">View</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">1236</td>
                <td class="py-2 px-4 border-b border-gray-200">Alice Brown</td>
                <td class="py-2 px-4 border-b border-gray-200">$234.56</td>
                <td class="py-2 px-4 border-b border-gray-200">Delivered</td>
                <td class="py-2 px-4 border-b border-gray-200">2024-07-01</td>
                <td class="py-2 px-4 border-b border-gray-200">
                    <button class="text-blue-600 hover:text-blue-800" @click="openModal('1236')">View</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- Top Products -->
<div class="bg-white p-4 rounded-lg shadow mb-6">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Top Products</h2>
    <ul class="list-disc pl-5 space-y-2">
        <li class="text-gray-600">Product A - 100 sales</li>
        <li class="text-gray-600">Product B - 90 sales</li>
        <li class="text-gray-600">Product C - 80 sales</li>
        <li class="text-gray-600">Product D - 70 sales</li>
        <li class="text-gray-600">Product E - 60 sales</li>
    </ul>
</div>

<!-- Customer List -->
<div class="bg-white p-4 rounded-lg shadow">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Customer List</h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">Name</th>
                <th class="py-2 px-4 border-b border-gray-200">Email</th>
                <th class="py-2 px-4 border-b border-gray-200">Joined</th>
                <th class="py-2 px-4 border-b border-gray-200">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                <td class="py-2 px-4 border-b border-gray-200">john.doe@example.com</td>
                <td class="py-2 px-4 border-b border-gray-200">2024-06-01</td>
                <td class="py-2 px-4 border-b border-gray-200">
                    <button class="text-blue-600 hover:text-blue-800" @click="openModal('john.doe@example.com')">View</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
                <td class="py-2 px-4 border-b border-gray-200">jane.smith@example.com</td>
                <td class="py-2 px-4 border-b border-gray-200">2024-06-05</td>
                <td class="py-2 px-4 border-b border-gray-200">
                    <button class="text-blue-600 hover:text-blue-800" @click="openModal('jane.smith@example.com')">View</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">Alice Brown</td>
                <td class="py-2 px-4 border-b border-gray-200">alice.brown@example.com</td>
                <td class="py-2 px-4 border-b border-gray-200">2024-06-10</td>
                <td class="py-2 px-4 border-b border-gray-200">
                    <button class="text-blue-600 hover:text-blue-800" @click="openModal('alice.brown@example.com')">View</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
</div>

<!-- Additional JavaScript for Charts and Interactivity -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Sales Chart
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Sales',
                data: [1200, 1900, 3000, 5000, 2300, 3200, 4700],
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Modal functionality
    window.openModal = function(orderId) {
        // Fetch order details using orderId (for now, static values are used)
        document.getElementById('orderId').innerText = orderId;
        document.getElementById('orderCustomer').innerText = 'John Doe';
        document.getElementById('orderTotal').innerText = '123.45';
        document.getElementById('orderStatus').innerText = 'Shipped';
        document.getElementById('orderDate').innerText = '2024-07-01';
        document.querySelector('[x-show="showModal"]').style.display = 'flex';
    };

    window.closeModal = function() {
        document.querySelector('[x-show="showModal"]').style.display = 'none';
    };
});
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Sales Chart
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Sales',
                data: [1200, 1900, 3000, 5000, 2300, 3200, 4700],
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
        const postContainers = document.querySelectorAll('.transition-transform');

        postContainers.forEach(container => {
            container.addEventListener('mouseover', () => {
                container.classList.add('scale-105', 'shadow-lg');
            });

            container.addEventListener('mouseout', () => {
                container.classList.remove('scale-105', 'shadow-lg');
            });
        });
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eCommerce\resources\views/users/dashboard.blade.php ENDPATH**/ ?>