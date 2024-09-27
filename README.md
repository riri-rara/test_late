```mermaid
erDiagram
    USERS {
        bigInt id PK
        varchar name
        varchar email
        varchar password
        timestamp created_at
        timestamp updated_at
    }

    CATEGORIES {
        bigInt id PK
        varchar content
        timestamp created_at
        timestamp updated_at
    }

    CONTACTS {
        bigInt id PK
        bigInt category_id FK
        varchar first_name
        varchar last_name
        tinyInt gender
        varchar email
        varchar tell
        varchar address
        varchar building
        text detail
        timestamp created_at
        timestamp updated_at
    }

    CONTACTS ||--o{ CATEGORIES : "belongs to"
    CONTACTS ||--o{ USERS : "created by"
