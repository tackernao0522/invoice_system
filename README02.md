# Entity-Relationship Diagram (ERD)

## Entities

- Customer
  - id: integer
  - name: string
  - email: string
  - phone_number: string

- Product
  - id: integer
  - name: string
  - description: string
  - price: decimal

- Estimate
  - id: integer
  - customer_id: integer (Foreign Key: customers.id)
  - date: date
  - total_amount: decimal
  - status: string
  - product_id: integer (Foreign Key: products.id)
  - quantity: integer
  - amount: decimal

- Invoice
  - id: integer
  - estimate_id: integer (Foreign Key: estimates.id)
  - due_date: date
  - total_amount: decimal
  - status: string
  - product_id: integer (Foreign Key: products.id)
  - quantity: integer
  - amount: decimal

- PaymentHistory
  - id: integer
  - invoice_id: integer (Foreign Key: invoices.id)
  - payment_date: date
  - amount: decimal

- Employee
  - id: integer
  - name: string
  - email: string
  - position: string

- Attendance
  - id: integer
  - employee_id: integer (Foreign Key: employees.id)
  - date: date
  - start_time: time
  - end_time: time
  - break_duration: integer
  - status: string
