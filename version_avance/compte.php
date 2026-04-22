* {
    margin: 0;
    padding: 0;
  }
  
.section-compte {
  grid-column: 1/3;
  grid-row: 2/3;
  background-color: #dcdfda;
  margin: 10px;
  padding: 20px;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: 20px;
}

.form-compte {
    gap: 15px;
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    flex-direction: column; /* Met chaque élément du form à la ligne */
    width: 80%;             /* Largeur relative pour éviter que le form soit trop large */
    max-width: 500px;       /* Largeur maximale pour éviter que le form soit trop large */
}

.form-compte input {
  padding: 12px 15px;
  border: 1px solid #ccc;
  border-radius: 25px; /* Plus arrondi */
  width: 75%;
  box-sizing: border-box;
  font-size: 14px;
  margin: 0 auto; /* Centre les champs */
  align-self: center;
}

.form-compte button {
  background-color: #4b5943;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  align-self: center;
}

.form-compte button:hover {
  background-color: #b7ce66;
}

.form-compte button:focus {
  outline: 2px solid #c8d6a2;
}
  