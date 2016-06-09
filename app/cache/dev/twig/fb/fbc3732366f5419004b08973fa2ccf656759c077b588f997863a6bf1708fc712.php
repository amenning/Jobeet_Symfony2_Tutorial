<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e9196c63574ab744b784dab89e575ab350e375d20e37e12426ae3410bd26bf4 = $this->env->getExtension("native_profiler");
        $__internal_4e9196c63574ab744b784dab89e575ab350e375d20e37e12426ae3410bd26bf4->enter($__internal_4e9196c63574ab744b784dab89e575ab350e375d20e37e12426ae3410bd26bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9196c63574ab744b784dab89e575ab350e375d20e37e12426ae3410bd26bf4->leave($__internal_4e9196c63574ab744b784dab89e575ab350e375d20e37e12426ae3410bd26bf4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ea5d82ec5f99d99fe643ddcb09f0bc57007da3ce9a10c808ef213faae62d1fc = $this->env->getExtension("native_profiler");
        $__internal_4ea5d82ec5f99d99fe643ddcb09f0bc57007da3ce9a10c808ef213faae62d1fc->enter($__internal_4ea5d82ec5f99d99fe643ddcb09f0bc57007da3ce9a10c808ef213faae62d1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ea5d82ec5f99d99fe643ddcb09f0bc57007da3ce9a10c808ef213faae62d1fc->leave($__internal_4ea5d82ec5f99d99fe643ddcb09f0bc57007da3ce9a10c808ef213faae62d1fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e56bf9faac184a4cab08deac941230eb6d5ee8ae680008a3ac4c97bff8ad7a6 = $this->env->getExtension("native_profiler");
        $__internal_2e56bf9faac184a4cab08deac941230eb6d5ee8ae680008a3ac4c97bff8ad7a6->enter($__internal_2e56bf9faac184a4cab08deac941230eb6d5ee8ae680008a3ac4c97bff8ad7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e56bf9faac184a4cab08deac941230eb6d5ee8ae680008a3ac4c97bff8ad7a6->leave($__internal_2e56bf9faac184a4cab08deac941230eb6d5ee8ae680008a3ac4c97bff8ad7a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7b636b36d67d5abe8ee932253e173d78a7848ab30a0a3e02dfea040cd0a88dc = $this->env->getExtension("native_profiler");
        $__internal_d7b636b36d67d5abe8ee932253e173d78a7848ab30a0a3e02dfea040cd0a88dc->enter($__internal_d7b636b36d67d5abe8ee932253e173d78a7848ab30a0a3e02dfea040cd0a88dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7b636b36d67d5abe8ee932253e173d78a7848ab30a0a3e02dfea040cd0a88dc->leave($__internal_d7b636b36d67d5abe8ee932253e173d78a7848ab30a0a3e02dfea040cd0a88dc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
