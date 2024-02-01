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

## 管理者用ダッシュボード画面に必要なデータ

### 請求書（Invoices）テーブル

- id: 請求書の一意の識別子 (Primary Key)
- customer_id: 顧客のID (Foreign Key)
- amount: 請求金額
- due_date: 支払期日
- status: 請求書の支払状況
- created_at: 作成日時
- updated_at: 更新日時

### 見積書（Estimates）テーブル

- id: 見積書の一意の識別子 (Primary Key)
- customer_id: 顧客のID (Foreign Key)
- amount: 見積金額
- expiration_date: 有効期限
- created_at: 作成日時
- updated_at: 更新日時

### 顧客（Customers）テーブル

- id: 顧客の一意の識別子 (Primary Key)
- name: 顧客名
- email: 顧客のメールアドレス
- phone: 顧客の電話番号
- address: 顧客の住所
- created_at: 作成日時
- updated_at: 更新日時

## 必要なモデル

1. 請求書（Invoices）モデル  
2. 見積書（Estimates）モデル  
3. 顧客（Customers）モデル  
