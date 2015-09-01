        <!-- ends main container-->
        </div>
        <div class="row be-black"></div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" id="contactUs" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Contactanos</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                    </div>                
                    <div class="modal-body myModalBody">                    
                        <div class="row">
                            <div class="col-md-6">   
                                <h1>Mapa</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-10">
                                        <form method="post" id="mensajeForm" action="./?action=send_mess">                                        
                                            <div class="form-group">
                                            <div class="form-group">
                                                <label class="control-label">Nombre:</label>
                                                <input required="required" name="nombre" id="nombre" type="text" class="form-control inputT" ng-model="nuevoMensaje.correo"/>
                                            </div>										
                                                <label class="control-label">Correo:</label>
                                                <input required="required" name="correo" id="correo" type="text" class="form-control inputT" ng-model="nuevoMensaje.correo"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Asunto:</label>
                                                <input required="required" name="asunto" id="asunto" type="text" class="form-control inputT" ng-model="nuevoMensaje.correo"/>
                                            </div>										
                                            <div class="form-group">
                                                <label class="control-label">Mensaje:</label>
                                                <textarea required="required" class="form-control" name="msg" id="texto" rows="5" placeholder="Contáctanos, escribe aquí tu mensaje."></textarea>
                                            </div>
                                            <div class="g-recaptcha" data-sitekey="6Lc03QQTAAAAAJ2bgugZAsttK4BbLDTP3sk9jjNS"></div>
                                            <p id="info">Gracias por contactarnos. Pronto nos estaremos comunicando contigo.</p>
                                            <button class="btn btn-primary"  type="submit">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="col-md-2"  ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer myModalFooter">                                            
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>

