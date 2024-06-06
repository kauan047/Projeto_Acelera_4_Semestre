const express = require('express');
const axios = require('axios');
const path = require('path');
const app = express();

app.use(express.json());
app.use(express.static(path.join(__dirname, 'public')));

// IP do ESP8266
const ESP8266_IP = 'http://192.168.4.1';

// Rota para enviar comando
app.post('/comando', async (req, res) => {
  try {
    const { comando } = req.body;
    const validCommands = ['F', 'B', 'L', 'R', 'S', 'V'];
    
    if (!validCommands.includes(comando)) {
      return res.status(400).json({ error: 'Comando inválido' });
    }

    const response = await axios.get(`${ESP8266_IP}/?State=${comando}`);
    
    if (response.status === 200) {
      res.json({ message: 'Comando enviado com sucesso' });
    } else {
      res.status(500).json({ error: 'Falha ao enviar comando' });
    }
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// Iniciar o servidor
const PORT = process.env.PORT || 5000;
app.listen(PORT, () => {
  console.log(`Servidor rodando na porta ${PORT}`);
});

// no cmd: npm install express axios

