@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Orders</h1>

    <div class="bg-white p-6 rounded-xl shadow-md">
        <div class="flex justify-between items-center mb-6">
            <div class="relative">
                <input type="text" placeholder="Search orders..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
            <div class="flex space-x-4">
                <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>All Statuses</option>
                    <option>Completed</option>
                    <option>Processing</option>
                    <option>Shipped</option>
                    <option>Pending</option>
                    <option>Cancelled</option>
                </select>
                <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>All Dates</option>
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                    <option>Last 90 Days</option>
                </select>
            </div>
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
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($orders as $order)
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
                                @elseif($order['status'] == 'Cancelled') bg-red-100 text-red-800
                                @endif">
                                {{ $order['status'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-indigo-600 hover:text-indigo-900 mr-2">View</button>
                            <button class="text-red-600 hover:text-red-900">Cancel</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-between items-center">
            <div class="text-sm text-gray-700">
                Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">50</span> results
            </div>
            <div class="flex space-x-2">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                    Previous
                </button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                    1
                </button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 bg-primary-50 border-primary-500 text-primary-600">
                    2
                </button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                    3
                </button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>
@endsection