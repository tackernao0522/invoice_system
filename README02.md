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

### 顧客（Customers）テーブル

- id: 顧客の一意の識別子 (Primary Key)
- name: 顧客名
- kana: 顧客カナ
- email: 顧客のメールアドレス
- phone: 顧客の電話番号
- postcode: 郵便番号
- address: 顧客の住所
- created_at: 作成日時
- updated_at: 更新日時

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
- status: 見積書のステータス（draft、sent、accepted、rejectedのいずれか）
- created_at: 作成日時
- updated_at: 更新日時

※ "Draft"（下書き）は、文書や書類がまだ最終的な承認や送信を受けていない状態を指します。  
見積書が「draft」の状態にある場合、それはまだ確定されたものではなく、  
修正や確認が必要な段階であることを示しています。  
通常、顧客に送信する前に見積書を確定させるために使用されます。  

※ "Sent"（送信済み）は、文書や書類が作成されて顧客や関係者に送信された状態を指します。  
つまり、見積書が「sent」の状態にある場合、それは顧客や関係者に送信され、受信待ちであることを意味します。  
この状態では、顧客が見積書を受け取り、確認または承認するのを待つことが一般的です。  

※ "Accepted"（承認済み）は、顧客や関係者が見積書を受け取り、その内容を承認した状態を指します。  
つまり、見積書が「accepted」の状態にある場合、顧客が見積金額や提供されたサービスに同意し、承認したことを意味します。  
この状態では、取引やプロジェクトが進行し、支払いやサービスの提供が行われることが一般的です。  

※ "Rejected"（却下された）は、顧客や関係者が見積書を受け取り、提案された内容を拒否した状態を指します。  
つまり、見積書が「rejected」の状態にある場合、顧客が提案された見積金額やサービスに同意せず、拒否したことを意味します。  
この場合、通常は交渉や再提案が行われることになります。  

## 必要なモデル

1. 請求書（Invoices）モデル  
2. 見積書（Estimates）モデル  
3. 顧客（Customers）モデル  
