# HimaDB

## Description
  * NoSQL needed PHP Class to store and retrieve data/objects only with pure PHP Language.

## Usage

- ### Store data in the database
<details>
  <summary>Example : <kbd>/?auth=yourDBName&create={}</kbd></summary>
    
  ### Request result
  ```
    {
      "status": "200",
      "result": "ABCDEF1230"
    } 
  ```
</details>

- ### Update stored data in the database
<details>
  <summary>Example : <kbd>/?auth=yourDBName&update=newCustomKey&name=oldKey</kbd></summary>
    
  ### Request result
  ```
    {
      "status": "200",
      "result": "newCustomKey"
    } 
  ```
</details>

- ### Get stored data from the database
<details>
  <summary>Example : <kbd>/?auth=yourDBName&get=keyName</kbd></summary>
    
  ### Request result
  ```
    {
      "status": "200",
      "result": [1, 2, 3, ...]
    } 
  ```
  
  ### Request error result
  ```
    {
      "status": "404",
      "result": "keyName is not exist"
    } 
  ```
</details>

- ### Get all keys from the database
<details>
  <summary>Example : <kbd>/?auth=yourDBName&all=true</kbd></summary>
    
  ### Request result
  ```
    {
      "status": "200",
      "result": ["ABCDEF1230", "oldKey", "newCustomKey", ...]
    } 
  ```
</details>

- ### Delete data from the database
<details>
  <summary>Example : <kbd>/?auth=yourDBName&delete=keyName</kbd></summary>
    
  ### Request result
  ```
    {
      "status": "200",
      "result": "success"
    } 
  ```
    
  ### Request error result
  ```
    {
      "status": "404",
      "result": "keyName is not exist"
    } 
  ```
</details>

- ### Delete a database
<details>
  <summary>Example : <kbd>/?auth=yourDBName&format=true</kbd></summary>
    
  ### Request result
  ```
    {
      "status": "200",
      "result": "success"
    } 
  ```
</details>

## License
- MIT License 
- You can edit this project as you need after Our Comments about Your Edition.

## Version
  - v1.0