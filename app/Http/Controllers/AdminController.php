<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!session('admin_logged_in')) {
                return redirect()->route('admin.login');
            }
            return $next($request);
        });
    }

    public function dashboard()
    {
        $stats = [
            'total_sales' => '$12,345',
            'new_orders' => 42,
            'active_users' => 1,234,
            'conversion_rate' => '3.4%'
        ];

        $recentOrders = [
            ['id' => 1001, 'customer' => 'John Doe', 'date' => '2023-11-15', 'amount' => '$125.00', 'status' => 'Completed'],
            ['id' => 1002, 'customer' => 'Jane Smith', 'date' => '2023-11-16', 'amount' => '$75.50', 'status' => 'Processing'],
            ['id' => 1003, 'customer' => 'Robert Johnson', 'date' => '2023-11-17', 'amount' => '$200.00', 'status' => 'Shipped'],
            ['id' => 1004, 'customer' => 'Emily Davis', 'date' => '2023-11-18', 'amount' => '$45.75', 'status' => 'Pending'],
            ['id' => 1005, 'customer' => 'Michael Wilson', 'date' => '2023-11-19', 'amount' => '$150.00', 'status' => 'Completed']
        ];

        $salesData = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            'datasets' => [
                [
                    'label' => 'Sales',
                    'data' => [1200, 1900, 3000, 5000, 2000, 3000, 4500, 6000, 7000, 8000, 9000, 10000],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1
                ]
            ]
        ];

        return view('admin.dashboard', compact('stats', 'recentOrders', 'salesData'));
    }

    public function products()
    {
        $products = [
            ['id' => 1, 'name' => 'Premium Widget', 'category' => 'Widgets', 'price' => '$19.99', 'stock' => 125, 'status' => 'Active'],
            ['id' => 2, 'name' => 'Basic Gadget', 'category' => 'Gadgets', 'price' => '$9.99', 'stock' => 75, 'status' => 'Active'],
            ['id' => 3, 'name' => 'Deluxe Tool', 'category' => 'Tools', 'price' => '$29.99', 'stock' => 42, 'status' => 'Draft'],
            ['id' => 4, 'name' => 'Standard Appliance', 'category' => 'Appliances', 'price' => '$49.99', 'stock' => 98, 'status' => 'Active'],
            ['id' => 5, 'name' => 'Economy Device', 'category' => 'Devices', 'price' => '$7.99', 'stock' => 210, 'status' => 'Archived']
        ];

        return view('admin.products', compact('products'));
    }

    public function orders()
    {
        $orders = [
            ['id' => 1001, 'customer' => 'John Doe', 'date' => '2023-11-15', 'amount' => '$125.00', 'status' => 'Completed'],
            ['id' => 1002, 'customer' => 'Jane Smith', 'date' => '2023-11-16', 'amount' => '$75.50', 'status' => 'Processing'],
            ['id' => 1003, 'customer' => 'Robert Johnson', 'date' => '2023-11-17', 'amount' => '$200.00', 'status' => 'Shipped'],
            ['id' => 1004, 'customer' => 'Emily Davis', 'date' => '2023-11-18', 'amount' => '$45.75', 'status' => 'Pending'],
            ['id' => 1005, 'customer' => 'Michael Wilson', 'date' => '2023-11-19', 'amount' => '$150.00', 'status' => 'Completed'],
            ['id' => 1006, 'customer' => 'Sarah Brown', 'date' => '2023-11-20', 'amount' => '$99.99', 'status' => 'Cancelled'],
            ['id' => 1007, 'customer' => 'David Lee', 'date' => '2023-11-21', 'amount' => '$175.00', 'status' => 'Completed'],
            ['id' => 1008, 'customer' => 'Jessica Taylor', 'date' => '2023-11-22', 'amount' => '$65.25', 'status' => 'Processing'],
            ['id' => 1009, 'customer' => 'Thomas Anderson', 'date' => '2023-11-23', 'amount' => '$225.00', 'status' => 'Shipped'],
            ['id' => 1010, 'customer' => 'Lisa Martinez', 'date' => '2023-11-24', 'amount' => '$35.50', 'status' => 'Pending']
        ];

        return view('admin.orders', compact('orders'));
    }

    public function customers()
    {
        $customers = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '(555) 123-4567', 'orders' => 12, 'total_spent' => '$1,250.00'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '(555) 234-5678', 'orders' => 8, 'total_spent' => '$750.00'],
            ['id' => 3, 'name' => 'Robert Johnson', 'email' => 'robert@example.com', 'phone' => '(555) 345-6789', 'orders' => 15, 'total_spent' => '$2,000.00'],
            ['id' => 4, 'name' => 'Emily Davis', 'email' => 'emily@example.com', 'phone' => '(555) 456-7890', 'orders' => 5, 'total_spent' => '$450.00'],
            ['id' => 5, 'name' => 'Michael Wilson', 'email' => 'michael@example.com', 'phone' => '(555) 567-8901', 'orders' => 20, 'total_spent' => '$1,500.00'],
            ['id' => 6, 'name' => 'Sarah Brown', 'email' => 'sarah@example.com', 'phone' => '(555) 678-9012', 'orders' => 3, 'total_spent' => '$99.99'],
            ['id' => 7, 'name' => 'David Lee', 'email' => 'david@example.com', 'phone' => '(555) 789-0123', 'orders' => 18, 'total_spent' => '$1,750.00'],
            ['id' => 8, 'name' => 'Jessica Taylor', 'email' => 'jessica@example.com', 'phone' => '(555) 890-1234', 'orders' => 7, 'total_spent' => '$650.00'],
            ['id' => 9, 'name' => 'Thomas Anderson', 'email' => 'thomas@example.com', 'phone' => '(555) 901-2345', 'orders' => 10, 'total_spent' => '$2,250.00'],
            ['id' => 10, 'name' => 'Lisa Martinez', 'email' => 'lisa@example.com', 'phone' => '(555) 012-3456', 'orders' => 4, 'total_spent' => '$350.00']
        ];

        return view('admin.customers', compact('customers'));
    }

    public function settings()
    {
        $settings = [
            'site_name' => 'Business Dashboard',
            'site_email' => 'admin@business.com',
            'currency' => 'USD',
            'timezone' => 'America/New_York',
            'date_format' => 'Y-m-d',
            'time_format' => 'H:i',
            'maintenance_mode' => false,
            'notifications' => [
                'email' => true,
                'sms' => false,
                'push' => true
            ]
        ];

        return view('admin.settings', compact('settings'));
    }
}