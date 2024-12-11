<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $employee->name) }}" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" value="{{ old('address', $employee->address) }}" required>

        <label for="age">Age</label>
        <input type="number" id="age" name="age" value="{{ old('age', $employee->age) }}" min="18" max="65" required>

        <label for="salary">Salary</label>
        <input type="number" id="salary" name="salary" value="{{ old('salary', $employee->salary) }}" min="0" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', $employee->email) }}" required>

        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $employee->phone_number) }}" required>

        <button type="submit">Update Employee</button>
    </form>
</body>
</html>
