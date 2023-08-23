<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            padding: 5px;
        }

        button {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>FPT-APTECH Library</h1>
    
    <form action="/search" method="GET">
        <input type="text" name="keyword" placeholder="Search by title">
        <button type="submit">Search</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Publication Year</th>
                <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->title); ?></td>
                    <td><?php echo e($book->authorid); ?></td>
                    <td><?php echo e($book->ISBN); ?></td>
                    <td><?php echo e($book->pub_year); ?></td>
                    <td><?php echo e($book->available); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\library_information\resources\views/books/index.blade.php ENDPATH**/ ?>