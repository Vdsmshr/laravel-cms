<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

<!-- Custom scripts -->
<script>
    // Function to fetch the number of posts in the current month
    async function fetchMonthlyPosts() {
        try {
            // Replace with your actual API endpoint or logic to get the number of posts
            const response = await fetch('/api/posts/monthly'); // Example API endpoint
            const data = await response.json();

            // Assuming the response contains an object with the number of posts
            const numberOfPosts = data.posts;

            // Update the HTML content
            document.getElementById('monthly-posts').innerText = numberOfPosts;
        } catch (error) {
            console.error('Error fetching monthly posts:', error);
            document.getElementById('monthly-posts').innerText = 'Error';
        }
    }

    // Call the function to fetch and display the number of posts
    fetchMonthlyPosts();
</script>

<!-- Chart area scripts for all pages-->
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>

<!-- Chart area scripts for all pages-->
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>