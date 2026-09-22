<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Business Sales</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Arial, sans-serif;
            color: #1f2937;
            background: #f3f4f6;
        }

        body {
            margin: 0;
        }

        .page {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 260px;
            min-height: 100vh;
        }

        .content {
            padding: 48px clamp(24px, 6vw, 80px);
        }

        .sidebar {
            padding: 48px 28px;
            background: #173f5f;
            color: #ffffff;
        }

        .sidebar h2 {
            margin: 0 0 32px;
            font-size: 1.15rem;
            line-height: 1.4;
        }

        .sidebar nav {
            display: grid;
            gap: 8px;
        }

        .sidebar a {
            display: block;
            padding: 12px 14px;
            color: #dbeafe;
            text-decoration: none;
            border-radius: 6px;
        }

        .sidebar a:hover,
        .sidebar a[aria-current="page"] {
            background: #2f6690;
            color: #ffffff;
        }

        h1 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
        }

        th,
        td {
            padding: 12px 14px;
            text-align: left;
            border: 1px solid #d1d5db;
        }

        th {
            background: #e5e7eb;
        }

        @media (max-width: 720px) {
            .page {
                grid-template-columns: 1fr;
            }

            .sidebar {
                order: -1;
                padding: 24px;
            }

            .sidebar nav {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .content {
                padding: 32px 24px;
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>
    <div class="page">
        <main class="content">
            <h1>Product List:</h1>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>

        <aside class="sidebar">
            <h2>Small Business Sales</h2>
            <nav aria-label="Main navigation">
                <a href="{{ url('/products') }}" aria-current="page">Product List</a>
                <a href="#customers">Customers</a>
                <a href="{{ url('/') }}">Home / Dashboard</a>
            </nav>
        </aside>
    </div>

</body>
</html>