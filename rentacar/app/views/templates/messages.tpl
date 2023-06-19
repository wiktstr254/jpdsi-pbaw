{if !$msgs->isEmpty()}
    <div class="col-6 col-12-medium">
        <ul>
            {foreach $msgs->getMessages() as $msg}
                {strip}
                    <li>{$msg->text}</li>
                {/strip}
            {/foreach}
        </ul>
    </div>
{/if}