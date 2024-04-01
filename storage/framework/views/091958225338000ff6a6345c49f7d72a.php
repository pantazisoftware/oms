<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Create Order')]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <?php echo e(__('New Order')); ?>

        </h2>
        <a href="<?php echo e(route('orders.all')); ?>" class="inline-flex space-x-2 items-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-indigo-100 text-sm font-medium hover:text-white hover:shadow-md rounded">
            <svg data-slot="icon" class="w-4 h-4" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"></path>
</svg>

            <span>View all orders</span>
        </a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-8">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-3 text-gray-900 sm:p-0">

                    <?php if($errors->any()): ?>
                    <div class="p-4 bg-red-100 rounded-lg">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="text-red-900">🙅 <?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('orders.store')); ?>" method="POST" class="flex flex-col w-full p-6 space-y-4 bg-gray-100 rounded-lg md:w-9/12 lg:w-6/12">
                        <h2 class="font-bold">Create Order</h2>
                        <div class="flex flex-col space-y-2">
                            <label for="name" class="text-gray-600">Name</label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="phone" class="text-gray-600">Phone</label>
                            <input type="text" name="phone" value="<?php echo e(old('phone')); ?>" id="phone" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="weight" class="text-gray-600">Weight (kg)</label>
                            <input type="number" value="0" step=".1" value="<?php echo e(old('weight')); ?>" name="weight" id="weight" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="details" class="text-gray-600">Details</label>
                            <textarea name="details" id="details"  value="<?php echo e(old('details')); ?>" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg" placeholder="Details about the order, any relevant info."></textarea>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="pickup_date" class="text-gray-600">Pickup Time</label>
                            <input type="datetime-local" name="pickup_date"  value="<?php echo e(old('pickup_date')); ?>" id="pickup_date" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="advance_payment_amount" class="text-gray-600">Advance Payment (lei)</label>
                            <input type="number" name="advance_payment_amount" value="0" id="advance_payment_amount"  value="<?php echo e(old('advance_payment_amount')); ?>" class="px-3 py-2 border border-gray-300 rounded-lg focus:shadow-lg">
                            <input type="hidden" name="rest_payment_amount" value="0" />
                            <input type="hidden" name="notes" value="0" />
                        </div>
                        <?php echo csrf_field(); ?>

                         <div class="flex flex-col space-y-2">
                            <button type="submit" class="bg-indigo-600 px-4 py-2.5 font-medium text-white hover:bg-indigo-500 rounded hover:shadow">Create Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Users/eduard-air/2024/oms/resources/views/orders/create.blade.php ENDPATH**/ ?>