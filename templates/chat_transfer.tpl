{literal}
<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').bootstrapSwitch();
        $('input').tooltip({placement:'auto',animation:true});
        $('label').tooltip({placement:'auto',animation:true});
        $("#myTab a").click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        });
    });
</script>
{/literal}

<div class="datacontainer" id="data">
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Opgelet!</strong> Als je je chatbox aan iemand anders overdraagt, kan jij hier geen aanpassingen meer aan doen!
    </div>
    
    <form role="form" method="post" action="{$fullurl}/transfer">
        <input type="hidden" name="chat_id" value="{$chat_id}" />
        <div class="tab-content" id="myTabContent">
            <!-- ALGEMENE INSTELLINGEN -->
            <div id="algemeen" class="tab-pane fade active in">
                <!-- Naam van de chatbox -->
                <div class="form-group">
                    <label for="username" class="control-label col-sm-3">Gebruikersnaam</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" title="De naam van de gebruiker aan wie je je chat wil overdragen." placeholder="Gebruikersnaam" required>
                    </div>
                </div>

            </div>
        </div>
        <br /><br />
        <button class="btn btn-default" type="submit">Draag chat over</button>
    </form>
    
    
</div>

