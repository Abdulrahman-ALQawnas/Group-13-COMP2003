@extends('layout.default')
@section('content')
      <div class="h-full overflow-hidden bg-white rounded-lg dark:bg-gray-800 mt-8">

      <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Submit a Report</h2>

        <form action="{{route('send_report', $user_id)}}" method="POST">
        @if (session('success'))
                      <div class="alert alert-success">
                          <p>{{ session('success') }}</p>
                      </div>
                  @endif
          @csrf
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <!-- Report Type -->
            <label for="reportType" class="block text-gray-700 font-medium mb-1">Report Type</label>
            <select id="reportType" name="type" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300 mb-4">
                <option value="">Select a report type</option>
                <option value="1">Spam</option>
                <option value="2">Unethical</option>
                <option value="3">Scam</option>
            </select>

            <!-- Description -->
            <label for="reason" class="block text-gray-700 font-medium mb-1">Description</label>
            <textarea id="reason" name="reason" rows="4" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Describe the reason..."></textarea>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-[#2B819F] text-white font-bold py-2 px-4 rounded-lg mt-4 hover:bg-[#2B819F]">
                Submit Report
            </button>
        </form>
    </div>
      </div>
@endsection