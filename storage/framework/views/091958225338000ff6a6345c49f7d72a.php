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

                    <form action="<?php echo e(route('orders.store')); ?>" method="POST" class="flex flex-col w-full p-6 space-y-4 rounded-lg bg-gray-50 md:w-9/12 lg:w-6/12">
                        <h2 class="text-2xl font-bold text-gray-800">Create Order</h2>
                        <div class="flex flex-col space-y-2">
                            <label for="name" class="text-sm font-medium text-gray-600">Client name</label>
                            <div class="flex flex-row overflow-hidden border border-gray-200 rounded-lg">
                                <div id="icon" class="flex items-center p-2 bg-gray-100 border-r border-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-600 size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </div>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name" class="w-full py-2 text-lg border-none focus:outline-none focus:ring focus:ring-transparent">
                            </div>

                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="phone" class="text-sm font-medium text-gray-600">Phone</label>
                            <div class="flex flex-row overflow-hidden border border-gray-200 rounded-lg">
                                <div id="icon" class="flex items-center p-2 bg-gray-100 border-r border-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-600 size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                </div>
                            <input type="text" name="phone" value="<?php echo e(old('phone')); ?>" id="phone" class="w-full py-2 text-lg border-none focus:outline-none focus:ring focus:ring-transparent">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="weight" class="text-sm font-medium text-gray-600">Weight (kg)</label>
                            <div class="flex flex-row overflow-hidden border border-gray-200 rounded-lg">
                               <div id="icon" class="flex items-center p-2 bg-gray-100 border-r border-gray-200">
                                    <p class="font-mono font-medium text-gray-600">kg</p>
                                </div>
                                <input type="number" value="0" step=".1" value="<?php echo e(old('weight')); ?>" name="weight" id="weight" class="w-full py-2 text-lg border-none focus:outline-none focus:ring focus:ring-transparent">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="details" class="text-sm font-medium text-gray-600">Details</label>
                            <textarea name="details" id="details" rows="3" value="<?php echo e(old('details')); ?>" class="w-full py-2 border border-gray-200 border-none rounded-lg focus:outline-none focus:ring focus:ring-transparent" placeholder="Details about the order, any relevant info."></textarea>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="pickup_date" class="text-sm font-medium text-gray-600">Pickup Time</label>
                            <div class="flex flex-row overflow-hidden border border-gray-200 rounded-lg">
                               <div id="icon" class="flex items-center p-2 bg-gray-100 border-r border-gray-200">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                </div>
                                <input type="datetime-local" name="pickup_date"  value="<?php echo e(old('pickup_date')); ?>" id="pickup_date" class="w-full py-2 text-lg border-none focus:outline-none focus:ring focus:ring-transparent">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <label for="advance_payment_amount" class="text-sm font-medium text-gray-600">Advance Payment (lei)</label>
                            <div class="flex flex-row overflow-hidden border border-gray-200 rounded-lg">
                               <div id="icon" class="flex items-center p-2 bg-gray-100 border-r border-gray-200">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-600 size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                    </svg>


                                </div>
                            <input type="number" name="advance_payment_amount" value="0" id="advance_payment_amount"  value="<?php echo e(old('advance_payment_amount')); ?>" class="w-full py-2 text-lg border-none focus:outline-none focus:ring focus:ring-transparent">
                            </div>
                            <input type="hidden" name="rest_payment_amount" value="0" />
                            <input type="hidden" name="notes" value="0" />
                        </div>
                        <?php echo csrf_field(); ?>

                         <div class="flex flex-col space-y-2">
                            <button type="submit" class="bg-indigo-600 cursor-pointer px-4 py-2.5 font-medium text-white hover:bg-indigo-500 rounded hover:shadow">Create Order</button>
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