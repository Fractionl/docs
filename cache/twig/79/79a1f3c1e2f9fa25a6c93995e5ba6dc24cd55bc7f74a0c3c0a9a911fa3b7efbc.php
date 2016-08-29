<?php

/* partials/github_link.html.twig */
class __TwigTemplate_cf434265a290a26ac7c9ee9e2f3b7bf889418892a438549a4c201c98ba7a0436 extends Twig_Template
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
        echo "<a class=\"github-link\" href=\"";
        echo ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "tree", array()) . twig_replace_filter(("/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filePathClean", array())), array("/user/" => "")));
        echo "\"><i class=\"fa fa-github-square\"></i> ";
        echo $this->env->getExtension('GravTwigExtension')->translate("THEME_LEARN2_GITHUB_EDIT_THIS_PAGE");
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "partials/github_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <a class="github-link" href="{{ theme_config.github.tree ~  ('/'~page.filePathClean)|replace({'/user/':''}) }}"><i class="fa fa-github-square"></i> {{ 'THEME_LEARN2_GITHUB_EDIT_THIS_PAGE'|t }}</a>*/
/* */
