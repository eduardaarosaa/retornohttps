try{
      //se a requisição acontecer
       return $this->response->setStatusCode(200)->setJSON([
                'status' => true,
                'message' => 'Dados retornados com sucesso',
                'data' => $data
            ]);

        }catch (\Exception $exception){
        
        //se der erro
            return $this->response->setStatusCode(500)->setJSON([
                'status' => false,
                'message' => 'Erro ao realizar a requisição',
                'error' => $exception->getMessage()
            ]);

        }
