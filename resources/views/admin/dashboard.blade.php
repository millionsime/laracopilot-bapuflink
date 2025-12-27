@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Dashboard</h1>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Sales</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $stats['total_sales'] }}</p>
                </div>
                <div class="bg-blue-100 p-3 rounded-full">
                    <i class="fas fa-dollar-sign text-blue-600"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-sm font-medium text-green-600">+12% from last month</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">New Orders</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $stats['new_orders'] }}</p>
                </div>
                <div class="bg-green-100 p-3 rounded-full">
                    <i class="fas fa-shopping-cart text-green-600"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-sm font-medium text-green-600">+8% from last month</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Active Users</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $stats['active_users'] }}</p>
                </div>
                <div class="bg-purple-100 p-3 rounded-full">
                    <i class="fas fa-users text-purple-600"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-sm font-medium text-green-600">+15% from last month</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Conversion Rate</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $stats['conversion_rate'] }}</p>
                </div>
                <div class="bg-orange-100 p-3 rounded-full">
                    <i class="fas fa-chart-line text-orange-600"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="text-sm font-medium text-green-600">+3% from last month</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Sales Overview</h2>
            <div class="h-80">
                <canvas id="salesChart"></canvas>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Customer Growth</h2>
            <div class="h-80">
                <canvas id="customerChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="bg-white p-6 rounded-xl shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Recent Orders</h2>
            <a href="{{ route('admin.orders') }}" class="text-primary-600 hover:text-primary-800 font-medium">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($recentOrders as $order)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $order['id'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order['customer'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order['date'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $order['amount'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                @if($order['status'] == 'Completed') bg-green-100 text-green-800
                                @elseif($order['status'] == 'Processing') bg-yellow-100 text-yellow-800
                                @elseif($order['status'] == 'Shipped') bg-blue-100 text-blue-800
                                @elseif($order['status'] == 'Pending') bg-gray-100 text-gray-800
                                @endif">
                                {{ $order['status'] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(document).ready(function() {
        // Sales Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: @json($salesData['labels']),
                datasets: [{
                    label: 'Sales',
                    data: @json($salesData['datasets'][0]['data']),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Customer Growth Chart
        const customerCtx = document.getElementById('customerChart').getContext('2d');
        const customerChart = new Chart(customerCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'New Customers',
                    data: [120, 190, 300, 500, 200, 300, 450, 600, 700, 800, 900, 1000],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection