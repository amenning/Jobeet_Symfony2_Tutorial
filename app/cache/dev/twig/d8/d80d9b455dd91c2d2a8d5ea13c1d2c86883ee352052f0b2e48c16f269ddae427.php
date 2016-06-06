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
        $__internal_fcd3688e8459f1317744bee1e0ce663a7edcf530b4680c3d4bb298699f4f8cf4 = $this->env->getExtension("native_profiler");
        $__internal_fcd3688e8459f1317744bee1e0ce663a7edcf530b4680c3d4bb298699f4f8cf4->enter($__internal_fcd3688e8459f1317744bee1e0ce663a7edcf530b4680c3d4bb298699f4f8cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fcd3688e8459f1317744bee1e0ce663a7edcf530b4680c3d4bb298699f4f8cf4->leave($__internal_fcd3688e8459f1317744bee1e0ce663a7edcf530b4680c3d4bb298699f4f8cf4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f49ff1ff20636902740805f2619bc763c46f48138c576dc470d626d6a21146ef = $this->env->getExtension("native_profiler");
        $__internal_f49ff1ff20636902740805f2619bc763c46f48138c576dc470d626d6a21146ef->enter($__internal_f49ff1ff20636902740805f2619bc763c46f48138c576dc470d626d6a21146ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f49ff1ff20636902740805f2619bc763c46f48138c576dc470d626d6a21146ef->leave($__internal_f49ff1ff20636902740805f2619bc763c46f48138c576dc470d626d6a21146ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b906af37a505fb07a149c3c22b1b81d88dbaa504950bbd097c847cd8fad48163 = $this->env->getExtension("native_profiler");
        $__internal_b906af37a505fb07a149c3c22b1b81d88dbaa504950bbd097c847cd8fad48163->enter($__internal_b906af37a505fb07a149c3c22b1b81d88dbaa504950bbd097c847cd8fad48163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b906af37a505fb07a149c3c22b1b81d88dbaa504950bbd097c847cd8fad48163->leave($__internal_b906af37a505fb07a149c3c22b1b81d88dbaa504950bbd097c847cd8fad48163_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9928d963966bb5a774b7e3abad275a7a1d35f7b6aa715615ea9d456f30f2e4f = $this->env->getExtension("native_profiler");
        $__internal_c9928d963966bb5a774b7e3abad275a7a1d35f7b6aa715615ea9d456f30f2e4f->enter($__internal_c9928d963966bb5a774b7e3abad275a7a1d35f7b6aa715615ea9d456f30f2e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9928d963966bb5a774b7e3abad275a7a1d35f7b6aa715615ea9d456f30f2e4f->leave($__internal_c9928d963966bb5a774b7e3abad275a7a1d35f7b6aa715615ea9d456f30f2e4f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b397c55a41d855d2b4a2eea80e5cbd60ed1e745be89a700805d6321f2a5d599 = $this->env->getExtension("native_profiler");
        $__internal_2b397c55a41d855d2b4a2eea80e5cbd60ed1e745be89a700805d6321f2a5d599->enter($__internal_2b397c55a41d855d2b4a2eea80e5cbd60ed1e745be89a700805d6321f2a5d599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2b397c55a41d855d2b4a2eea80e5cbd60ed1e745be89a700805d6321f2a5d599->leave($__internal_2b397c55a41d855d2b4a2eea80e5cbd60ed1e745be89a700805d6321f2a5d599_prof);

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
