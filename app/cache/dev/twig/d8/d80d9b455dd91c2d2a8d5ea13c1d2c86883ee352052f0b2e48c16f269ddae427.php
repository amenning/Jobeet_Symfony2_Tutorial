<?php

/* ::base.html.twig */
class __TwigTemplate_3f9da5be73857a3831d89025841079d092a05bda3a9635af3c0ad38204635659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dcba95615f3e789e57c568302fd995f83b683a2899cb9b8f814ba7041dd7110 = $this->env->getExtension("native_profiler");
        $__internal_0dcba95615f3e789e57c568302fd995f83b683a2899cb9b8f814ba7041dd7110->enter($__internal_0dcba95615f3e789e57c568302fd995f83b683a2899cb9b8f814ba7041dd7110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0dcba95615f3e789e57c568302fd995f83b683a2899cb9b8f814ba7041dd7110->leave($__internal_0dcba95615f3e789e57c568302fd995f83b683a2899cb9b8f814ba7041dd7110_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_12db8827626d9988491e70f46d531c251a767e867793075ead621244bece4cfa = $this->env->getExtension("native_profiler");
        $__internal_12db8827626d9988491e70f46d531c251a767e867793075ead621244bece4cfa->enter($__internal_12db8827626d9988491e70f46d531c251a767e867793075ead621244bece4cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12db8827626d9988491e70f46d531c251a767e867793075ead621244bece4cfa->leave($__internal_12db8827626d9988491e70f46d531c251a767e867793075ead621244bece4cfa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5247bf2e95fafed0dd414f2fcc8f9f474074a8b34d20fcc32f57467b03ba409 = $this->env->getExtension("native_profiler");
        $__internal_e5247bf2e95fafed0dd414f2fcc8f9f474074a8b34d20fcc32f57467b03ba409->enter($__internal_e5247bf2e95fafed0dd414f2fcc8f9f474074a8b34d20fcc32f57467b03ba409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e5247bf2e95fafed0dd414f2fcc8f9f474074a8b34d20fcc32f57467b03ba409->leave($__internal_e5247bf2e95fafed0dd414f2fcc8f9f474074a8b34d20fcc32f57467b03ba409_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98d02a76ff794eb3730777fc5a4d4fedc535baa66c9c4c4abc89e6cecf124661 = $this->env->getExtension("native_profiler");
        $__internal_98d02a76ff794eb3730777fc5a4d4fedc535baa66c9c4c4abc89e6cecf124661->enter($__internal_98d02a76ff794eb3730777fc5a4d4fedc535baa66c9c4c4abc89e6cecf124661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_98d02a76ff794eb3730777fc5a4d4fedc535baa66c9c4c4abc89e6cecf124661->leave($__internal_98d02a76ff794eb3730777fc5a4d4fedc535baa66c9c4c4abc89e6cecf124661_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eee01065d2ce6680e2fbcbe85cc8b6bd92ec16945759a477c0b6ec69261ce307 = $this->env->getExtension("native_profiler");
        $__internal_eee01065d2ce6680e2fbcbe85cc8b6bd92ec16945759a477c0b6ec69261ce307->enter($__internal_eee01065d2ce6680e2fbcbe85cc8b6bd92ec16945759a477c0b6ec69261ce307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eee01065d2ce6680e2fbcbe85cc8b6bd92ec16945759a477c0b6ec69261ce307->leave($__internal_eee01065d2ce6680e2fbcbe85cc8b6bd92ec16945759a477c0b6ec69261ce307_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
