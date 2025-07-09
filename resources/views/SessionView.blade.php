@vite('resources/css/app.css')

<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-2xl shadow-lg">
  <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Contact Us</h2>
  
  <form method="POST" action='login'>
      @csrf
    <div class="mb-4">
      <label class="block text-gray-700 mb-2" for="name">Name</label>
      <input 
        type="text" 
        id="name" 
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="Enter your name"
      >
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 mb-2" for="email">Email</label>
      <input 
        type="email" 
        id="email" 
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="you@example.com"
      >
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 mb-2" for="message">Message</label>
      <textarea 
        id="message" 
        rows="4" 
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="Your message..."
      ></textarea>
    </div>

    <button 
      type="submit" 
      class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition-colors"
    >
      Send Message
    </button>
  </form>
</div>

