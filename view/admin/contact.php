<h2 class="mt-3">Contact</h2>
<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    fetch('/get-contact-us')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('tbody');
            data.data.forEach((contact, index) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${contact.email}</td>
                    <td>${contact.subject}</td>
                    <td>${contact.message}</td>
                `;
                tableBody.appendChild(tr);
            });
        });

</script>