<?php

/* partials/dashboard-notifications.html.twig */
class __TwigTemplate_38a4c9f767a7e7f4e23fc5d11c3ac557cddd675edbcdeadf732cf7baf98479ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"notifications\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NOTIFICATIONS"), "html", null, true);
        echo "
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"notifications\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>
    <div class=\"widget-content\">
        <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/dashboard-notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div id="notifications" class="dashboard-item admin-block default-box-shadow">*/
/*     <h1>*/
/*         {{ "PLUGIN_ADMIN.NOTIFICATIONS"|tu }}*/
/*         <span class="right">*/
/*             <a href="#" class="button button-small" data-refresh="notifications"><i class="fa fa-refresh"></i></a>*/
/*         </span>*/
/*     </h1>*/
/*     <div class="widget-content">*/
/*         <div class="widget-loader"><i class="fa fa-refresh fa-spin"></i></div>*/
/*         <ul></ul>*/
/*     </div>*/
/* </div>*/
/* */
