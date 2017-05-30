---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://midigitallife.app/docs/collection.json)
<!-- END_INFO -->

#Client

Clients are stored in the tbl_Clients table. They represent clients of miDigitalLife
<!-- START_6363df4616861975239c7594e8bf2d64 -->
## Display a list of all Clients.

Returns a list of existing clients with the following data:
 - uuid
 - short_name
 - long_name
 - user_created
 - user_updated
 - user_deleted
 - created_at
 - updated_at
 - deleted_at

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/client" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/client",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/client`

`HEAD api/v1/editor/client`


<!-- END_6363df4616861975239c7594e8bf2d64 -->

<!-- START_e35f07d85b1f717198ae8475a00f2c60 -->
## Store a newly created Client in storage.

> Example request:

```bash
curl -X POST "http://midigitallife.app/api/v1/editor/client" \
-H "Accept: application/json" \
    -d "short_name"="cumque" \
    -d "long_name"="cumque" \
    -d "user_created"="cumque" \
    -d "user_updated"="cumque" \
    -d "user_deleted"="cumque" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/client",
    "method": "POST",
    "data": {
        "short_name": "cumque",
        "long_name": "cumque",
        "user_created": "cumque",
        "user_updated": "cumque",
        "user_deleted": "cumque"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/editor/client`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    short_name | string |  required  | 
    long_name | string |  optional  | 
    user_created | string |  optional  | 
    user_updated | string |  optional  | 
    user_deleted | string |  optional  | 

<!-- END_e35f07d85b1f717198ae8475a00f2c60 -->

<!-- START_b5cd2db2806754938e48a8d04c6fda4b -->
## Display the Client.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/client/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/client/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/client/{id}`

`HEAD api/v1/editor/client/{id}`


<!-- END_b5cd2db2806754938e48a8d04c6fda4b -->

<!-- START_e35c16a37ef803c2a9e38387929da5c1 -->
## Display the Client Products.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/client/{id}/products" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/client/{id}/products",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/client/{id}/products`

`HEAD api/v1/editor/client/{id}/products`


<!-- END_e35c16a37ef803c2a9e38387929da5c1 -->

<!-- START_76a1a1c60c92f718be537a2c89e195c3 -->
## Update an existing Client in storage.

> Example request:

```bash
curl -X PATCH "http://midigitallife.app/api/v1/editor/client/{id}" \
-H "Accept: application/json" \
    -d "short_name"="et" \
    -d "long_name"="et" \
    -d "user_created"="et" \
    -d "user_updated"="et" \
    -d "user_deleted"="et" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/client/{id}",
    "method": "PATCH",
    "data": {
        "short_name": "et",
        "long_name": "et",
        "user_created": "et",
        "user_updated": "et",
        "user_deleted": "et"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/editor/client/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    short_name | string |  required  | 
    long_name | string |  optional  | 
    user_created | string |  optional  | 
    user_updated | string |  optional  | 
    user_deleted | string |  optional  | 

<!-- END_76a1a1c60c92f718be537a2c89e195c3 -->

<!-- START_ca37f626c672a69050340a5611cb0e27 -->
## Remove the Client from storage.

> Example request:

```bash
curl -X DELETE "http://midigitallife.app/api/v1/editor/client/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/client/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/editor/client/{id}`


<!-- END_ca37f626c672a69050340a5611cb0e27 -->

#Product

Products are stored in the tbl_Products table. They share a many-to-many relationship with clients.
<!-- START_7e6a78ea20b3952f0d61d06052feb95a -->
## Display a listing of all Products.

Returns a list of existing products with the following data:
 - uuid
 - short_name
 - long_name
 - user_created
 - user_updated
 - user_deleted
 - created_at
 - updated_at
 - deleted_at

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/product" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/product",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/product`

`HEAD api/v1/editor/product`


<!-- END_7e6a78ea20b3952f0d61d06052feb95a -->

<!-- START_a6793e682c309c6a325c5e466bcff84c -->
## Store a new Product in storage.

> Example request:

```bash
curl -X POST "http://midigitallife.app/api/v1/editor/product" \
-H "Accept: application/json" \
    -d "short_name"="nam" \
    -d "long_name"="nam" \
    -d "user_created"="nam" \
    -d "user_updated"="nam" \
    -d "user_deleted"="nam" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/product",
    "method": "POST",
    "data": {
        "short_name": "nam",
        "long_name": "nam",
        "user_created": "nam",
        "user_updated": "nam",
        "user_deleted": "nam"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/editor/product`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    short_name | string |  required  | 
    long_name | string |  optional  | 
    user_created | string |  optional  | 
    user_updated | string |  optional  | 
    user_deleted | string |  optional  | 

<!-- END_a6793e682c309c6a325c5e466bcff84c -->

<!-- START_69f616411d386365b0164c983cd2ebea -->
## Display the Product.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/product/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/product/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/product/{id}`

`HEAD api/v1/editor/product/{id}`


<!-- END_69f616411d386365b0164c983cd2ebea -->

<!-- START_ef7b44fec5f71506dccbfbd70eecf3a3 -->
## Display a list of Clients that use this Product.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/product/{id}/clients" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/product/{id}/clients",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/product/{id}/clients`

`HEAD api/v1/editor/product/{id}/clients`


<!-- END_ef7b44fec5f71506dccbfbd70eecf3a3 -->

<!-- START_03ec8240febfe978130e78d5552797ea -->
## Display a list of questions used by this Product.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/product/{id}/questions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/product/{id}/questions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/product/{id}/questions`

`HEAD api/v1/editor/product/{id}/questions`


<!-- END_03ec8240febfe978130e78d5552797ea -->

<!-- START_6ab5ac2e3c3bcd6fe9d077aebf89090e -->
## Update the Product in storage.

> Example request:

```bash
curl -X PATCH "http://midigitallife.app/api/v1/editor/product/{id}" \
-H "Accept: application/json" \
    -d "short_name"="accusamus" \
    -d "long_name"="accusamus" \
    -d "user_created"="accusamus" \
    -d "user_updated"="accusamus" \
    -d "user_deleted"="accusamus" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/product/{id}",
    "method": "PATCH",
    "data": {
        "short_name": "accusamus",
        "long_name": "accusamus",
        "user_created": "accusamus",
        "user_updated": "accusamus",
        "user_deleted": "accusamus"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/editor/product/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    short_name | string |  required  | 
    long_name | string |  optional  | 
    user_created | string |  optional  | 
    user_updated | string |  optional  | 
    user_deleted | string |  optional  | 

<!-- END_6ab5ac2e3c3bcd6fe9d077aebf89090e -->

<!-- START_9fd5d50f947b4c7b449dedfc7c1faf5f -->
## Remove the Product from storage.

Products use soft deletes.

> Example request:

```bash
curl -X DELETE "http://midigitallife.app/api/v1/editor/product/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/product/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/editor/product/{id}`


<!-- END_9fd5d50f947b4c7b449dedfc7c1faf5f -->

#Question

Questions are stored in the tbl_Questions table. They share a many-to-many relationship with products, allowing many products to share questions.
<!-- START_3aa7d0c37db93964bdb75cfd0cf41609 -->
## Display a listing of all Questions.

Returns a list of existing questions with the following data:
 - uuid
 - question
 - data_type_uuid
 - control_type_uuid
 - user_created
 - user_updated
 - user_deleted
 - created_at
 - updated_at
 - deleted_at

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/question" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/question",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/question`

`HEAD api/v1/editor/question`


<!-- END_3aa7d0c37db93964bdb75cfd0cf41609 -->

<!-- START_e1d64ec77fa4f6b5b0f18e25f03726ac -->
## Store a new Question in storage.

> Example request:

```bash
curl -X POST "http://midigitallife.app/api/v1/editor/question" \
-H "Accept: application/json" \
    -d "question"="ipsum" \
    -d "data_type_id"="ipsum" \
    -d "control_type_id"="ipsum" \
    -d "user_created"="ipsum" \
    -d "user_updated"="ipsum" \
    -d "user_deleted"="ipsum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/question",
    "method": "POST",
    "data": {
        "question": "ipsum",
        "data_type_id": "ipsum",
        "control_type_id": "ipsum",
        "user_created": "ipsum",
        "user_updated": "ipsum",
        "user_deleted": "ipsum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/editor/question`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    question | string |  required  | 
    data_type_id | string |  required  | 
    control_type_id | string |  required  | 
    user_created | string |  optional  | 
    user_updated | string |  optional  | 
    user_deleted | string |  optional  | 

<!-- END_e1d64ec77fa4f6b5b0f18e25f03726ac -->

<!-- START_1c865c0e512e5f6195aabee2b44c4b0c -->
## Display a Question.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/question/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/question/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/question/{id}`

`HEAD api/v1/editor/question/{id}`


<!-- END_1c865c0e512e5f6195aabee2b44c4b0c -->

<!-- START_8b63d06504f0fefca652c053fcc9c374 -->
## Update the Question in storage.

> Example request:

```bash
curl -X PATCH "http://midigitallife.app/api/v1/editor/question/{id}" \
-H "Accept: application/json" \
    -d "question"="modi" \
    -d "data_type_id"="modi" \
    -d "control_type_id"="modi" \
    -d "user_created"="modi" \
    -d "user_updated"="modi" \
    -d "user_deleted"="modi" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/question/{id}",
    "method": "PATCH",
    "data": {
        "question": "modi",
        "data_type_id": "modi",
        "control_type_id": "modi",
        "user_created": "modi",
        "user_updated": "modi",
        "user_deleted": "modi"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/editor/question/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    question | string |  required  | 
    data_type_id | string |  required  | 
    control_type_id | string |  required  | 
    user_created | string |  optional  | 
    user_updated | string |  optional  | 
    user_deleted | string |  optional  | 

<!-- END_8b63d06504f0fefca652c053fcc9c374 -->

<!-- START_c7a3834d295150b1c4009dc5eada4171 -->
## Remove the Question from storage.

Questions use soft deletes.

> Example request:

```bash
curl -X DELETE "http://midigitallife.app/api/v1/editor/question/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/question/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/editor/question/{id}`


<!-- END_c7a3834d295150b1c4009dc5eada4171 -->

#general
<!-- START_0e366d80aa1c9c03fc0664da8dba55d7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/controltype" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltype",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/controltype`

`HEAD api/v1/editor/controltype`


<!-- END_0e366d80aa1c9c03fc0664da8dba55d7 -->

<!-- START_7c81b7c4eeaaa5a5d6345f40ade68ed1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://midigitallife.app/api/v1/editor/controltype" \
-H "Accept: application/json" \
    -d "control_type"="dicta" \
    -d "control_tag"="dicta" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltype",
    "method": "POST",
    "data": {
        "control_type": "dicta",
        "control_tag": "dicta"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/editor/controltype`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    control_type | string |  required  | 
    control_tag | string |  required  | 

<!-- END_7c81b7c4eeaaa5a5d6345f40ade68ed1 -->

<!-- START_fd3f3dcb681305513113656627c590e6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/controltype/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltype/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/controltype/{id}`

`HEAD api/v1/editor/controltype/{id}`


<!-- END_fd3f3dcb681305513113656627c590e6 -->

<!-- START_f3311536a1a13d84a5623996835f38a7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH "http://midigitallife.app/api/v1/editor/controltype/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltype/{id}",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/editor/controltype/{id}`


<!-- END_f3311536a1a13d84a5623996835f38a7 -->

<!-- START_043e5d20e218fa936c4c6b4b0bcf920a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://midigitallife.app/api/v1/editor/controltype/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltype/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/editor/controltype/{id}`


<!-- END_043e5d20e218fa936c4c6b4b0bcf920a -->

<!-- START_7b546deb083e517e3d14bff7086b698f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/controltypeattribute" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltypeattribute",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/controltypeattribute`

`HEAD api/v1/editor/controltypeattribute`


<!-- END_7b546deb083e517e3d14bff7086b698f -->

<!-- START_a9bf3b3c7e454a7d759fcb9afcb73e8c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://midigitallife.app/api/v1/editor/controltypeattribute" \
-H "Accept: application/json" \
    -d "attribute_name"="pariatur" \
    -d "attribute_value"="pariatur" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltypeattribute",
    "method": "POST",
    "data": {
        "attribute_name": "pariatur",
        "attribute_value": "pariatur"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/editor/controltypeattribute`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    attribute_name | string |  required  | 
    attribute_value | string |  required  | 

<!-- END_a9bf3b3c7e454a7d759fcb9afcb73e8c -->

<!-- START_6f657c14b427218852a1ba3550e976de -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/controltypeattribute/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltypeattribute/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/controltypeattribute/{id}`

`HEAD api/v1/editor/controltypeattribute/{id}`


<!-- END_6f657c14b427218852a1ba3550e976de -->

<!-- START_ac9d0859fa8e48c95f3189d25bd2b445 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH "http://midigitallife.app/api/v1/editor/controltypeattribute/{id}" \
-H "Accept: application/json" \
    -d "attribute_name"="architecto" \
    -d "attribute_value"="architecto" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltypeattribute/{id}",
    "method": "PATCH",
    "data": {
        "attribute_name": "architecto",
        "attribute_value": "architecto"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/editor/controltypeattribute/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    attribute_name | string |  required  | 
    attribute_value | string |  required  | 

<!-- END_ac9d0859fa8e48c95f3189d25bd2b445 -->

<!-- START_3dd4615cb5e15aac4c74f56493a17c4d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://midigitallife.app/api/v1/editor/controltypeattribute/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/controltypeattribute/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/editor/controltypeattribute/{id}`


<!-- END_3dd4615cb5e15aac4c74f56493a17c4d -->

<!-- START_3c9c37307c750ae463a4ef6fc978a5d0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/datatype" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/datatype",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/datatype`

`HEAD api/v1/editor/datatype`


<!-- END_3c9c37307c750ae463a4ef6fc978a5d0 -->

<!-- START_be33d995a7f2c5d7e20b4713f3df18e3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://midigitallife.app/api/v1/editor/datatype" \
-H "Accept: application/json" \
    -d "data_type"="vero" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/datatype",
    "method": "POST",
    "data": {
        "data_type": "vero"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/editor/datatype`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    data_type | string |  required  | 

<!-- END_be33d995a7f2c5d7e20b4713f3df18e3 -->

<!-- START_4a9a8eee716c0a1aae6a59564eaf5ead -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/datatype/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/datatype/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/datatype/{id}`

`HEAD api/v1/editor/datatype/{id}`


<!-- END_4a9a8eee716c0a1aae6a59564eaf5ead -->

<!-- START_d5dfb8b10ca6685f42d829ae0d94ea23 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH "http://midigitallife.app/api/v1/editor/datatype/{id}" \
-H "Accept: application/json" \
    -d "data_type"="accusamus" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/datatype/{id}",
    "method": "PATCH",
    "data": {
        "data_type": "accusamus"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/editor/datatype/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    data_type | string |  required  | 

<!-- END_d5dfb8b10ca6685f42d829ae0d94ea23 -->

<!-- START_4c1c7d57059936269a61fff32ac6d05c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://midigitallife.app/api/v1/editor/datatype/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/datatype/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/editor/datatype/{id}`


<!-- END_4c1c7d57059936269a61fff32ac6d05c -->

<!-- START_ef73313ae47184b5b45c4f88cd6ae338 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/event" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/event",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/event`

`HEAD api/v1/editor/event`


<!-- END_ef73313ae47184b5b45c4f88cd6ae338 -->

<!-- START_7340af672164b5addba79d4d8859fdf2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://midigitallife.app/api/v1/editor/event" \
-H "Accept: application/json" \
    -d "product_id"="architecto" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/event",
    "method": "POST",
    "data": {
        "product_id": "architecto"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/editor/event`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    product_id | string |  required  | 

<!-- END_7340af672164b5addba79d4d8859fdf2 -->

<!-- START_f4632436df972458a26b0c2a8810a14f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/event/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/event/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/editor/event/{id}`

`HEAD api/v1/editor/event/{id}`


<!-- END_f4632436df972458a26b0c2a8810a14f -->

<!-- START_3b7a5c56c7b6667595648c40f75d7377 -->
## api/v1/editor/event/{id}/answers

> Example request:

```bash
curl -X GET "http://midigitallife.app/api/v1/editor/event/{id}/answers" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/event/{id}/answers",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "response": "show a list of answers for this event"
    }
]
```

### HTTP Request
`GET api/v1/editor/event/{id}/answers`

`HEAD api/v1/editor/event/{id}/answers`


<!-- END_3b7a5c56c7b6667595648c40f75d7377 -->

<!-- START_e73203ef3790201f30cf7bbc2e950e04 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH "http://midigitallife.app/api/v1/editor/event/{id}" \
-H "Accept: application/json" \
    -d "product_id"="est" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/event/{id}",
    "method": "PATCH",
    "data": {
        "product_id": "est"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/editor/event/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    product_id | string |  required  | 

<!-- END_e73203ef3790201f30cf7bbc2e950e04 -->

<!-- START_c0939629f46c4b7fd755e5df138a69aa -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://midigitallife.app/api/v1/editor/event/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://midigitallife.app/api/v1/editor/event/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/editor/event/{id}`


<!-- END_c0939629f46c4b7fd755e5df138a69aa -->

