<script>
    document.getElementById("logout-link").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior

        fetch("{{ route('admin.logout') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json"
            }
        }).then(response => {
            if (response.ok) {
                window.location.href = "{{ route('admin.login') }}"; // Redirect after logout
            }
        }).catch(error => console.error("Error:", error));
    });
</script>