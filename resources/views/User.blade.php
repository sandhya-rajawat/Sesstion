@vite('resources/css/app.css')

<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-2xl shadow-lg">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Contact Us</h2>

    <form method="POST" action='add'>
        @csrf
     <span class='text-green-600 '> {{session('message')}}</span>
     <span class='text-blue-600 '> {{session('sender')}}</span>
 <!-- {{session->reflash('message')}} -->
  <!-- {{session->keep(['sender'])}} -->


        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="name">Name</label>
            <input
                type="text"
                id="name"
                name='name'
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your name">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="phone">phone</label>
            <input
                type="text"
                id="phone"
                name='phone'
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your phone">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="email">Email</label>
            <input
                name='email'
                type="email"
                id="email"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="you@example.com">
        </div>

        <button
            type="submit"
            class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors">
            Add New User
        </button>
    </form>
</div>