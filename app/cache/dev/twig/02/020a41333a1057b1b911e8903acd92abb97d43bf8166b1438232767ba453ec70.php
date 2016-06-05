<?php

/* base.html.twig */
class __TwigTemplate_3c7c0f9dba0efffe9bfa4a8d04b09769c8ce1b0f37ddc8df317c0b0faf985f34 extends Twig_Template
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
        $__internal_635452a0bf4d16b7f204d9b5af3a999632837ce25e46e13ccac6c038fc3d5e2a = $this->env->getExtension("native_profiler");
        $__internal_635452a0bf4d16b7f204d9b5af3a999632837ce25e46e13ccac6c038fc3d5e2a->enter($__internal_635452a0bf4d16b7f204d9b5af3a999632837ce25e46e13ccac6c038fc3d5e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_635452a0bf4d16b7f204d9b5af3a999632837ce25e46e13ccac6c038fc3d5e2a->leave($__internal_635452a0bf4d16b7f204d9b5af3a999632837ce25e46e13ccac6c038fc3d5e2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8303be2216a0f690ff47ebfc43243f44474d0b8ad845de36f5f12469af3b3541 = $this->env->getExtension("native_profiler");
        $__internal_8303be2216a0f690ff47ebfc43243f44474d0b8ad845de36f5f12469af3b3541->enter($__internal_8303be2216a0f690ff47ebfc43243f44474d0b8ad845de36f5f12469af3b3541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8303be2216a0f690ff47ebfc43243f44474d0b8ad845de36f5f12469af3b3541->leave($__internal_8303be2216a0f690ff47ebfc43243f44474d0b8ad845de36f5f12469af3b3541_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce0e83782bd908d10607abdb5685e882e77bc84a863fb5f33128bd610097740d = $this->env->getExtension("native_profiler");
        $__internal_ce0e83782bd908d10607abdb5685e882e77bc84a863fb5f33128bd610097740d->enter($__internal_ce0e83782bd908d10607abdb5685e882e77bc84a863fb5f33128bd610097740d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce0e83782bd908d10607abdb5685e882e77bc84a863fb5f33128bd610097740d->leave($__internal_ce0e83782bd908d10607abdb5685e882e77bc84a863fb5f33128bd610097740d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ebf59ce203c6f0315de7f2e721365b1f696fa9c64cde3429a81f3ccd74bc737 = $this->env->getExtension("native_profiler");
        $__internal_0ebf59ce203c6f0315de7f2e721365b1f696fa9c64cde3429a81f3ccd74bc737->enter($__internal_0ebf59ce203c6f0315de7f2e721365b1f696fa9c64cde3429a81f3ccd74bc737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ebf59ce203c6f0315de7f2e721365b1f696fa9c64cde3429a81f3ccd74bc737->leave($__internal_0ebf59ce203c6f0315de7f2e721365b1f696fa9c64cde3429a81f3ccd74bc737_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_578df727ce8da60c06442c8b1ac831223208efcfdae108173df1d8c80401ccaa = $this->env->getExtension("native_profiler");
        $__internal_578df727ce8da60c06442c8b1ac831223208efcfdae108173df1d8c80401ccaa->enter($__internal_578df727ce8da60c06442c8b1ac831223208efcfdae108173df1d8c80401ccaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_578df727ce8da60c06442c8b1ac831223208efcfdae108173df1d8c80401ccaa->leave($__internal_578df727ce8da60c06442c8b1ac831223208efcfdae108173df1d8c80401ccaa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
