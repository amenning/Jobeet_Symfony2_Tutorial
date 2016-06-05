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
        $__internal_1a9430b8affed9b09e168494acedbbe0c6be5bebecc8df341b19c93b0ce01a3d = $this->env->getExtension("native_profiler");
        $__internal_1a9430b8affed9b09e168494acedbbe0c6be5bebecc8df341b19c93b0ce01a3d->enter($__internal_1a9430b8affed9b09e168494acedbbe0c6be5bebecc8df341b19c93b0ce01a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a9430b8affed9b09e168494acedbbe0c6be5bebecc8df341b19c93b0ce01a3d->leave($__internal_1a9430b8affed9b09e168494acedbbe0c6be5bebecc8df341b19c93b0ce01a3d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49e902ffdb918079314d8770bd10f34d5c381ddf5c57ea4a185ff406062e9394 = $this->env->getExtension("native_profiler");
        $__internal_49e902ffdb918079314d8770bd10f34d5c381ddf5c57ea4a185ff406062e9394->enter($__internal_49e902ffdb918079314d8770bd10f34d5c381ddf5c57ea4a185ff406062e9394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49e902ffdb918079314d8770bd10f34d5c381ddf5c57ea4a185ff406062e9394->leave($__internal_49e902ffdb918079314d8770bd10f34d5c381ddf5c57ea4a185ff406062e9394_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb125d68f482397a9accb64a92346df21ac9eabb7ef6f7f1aeb25dfb5d49bf59 = $this->env->getExtension("native_profiler");
        $__internal_eb125d68f482397a9accb64a92346df21ac9eabb7ef6f7f1aeb25dfb5d49bf59->enter($__internal_eb125d68f482397a9accb64a92346df21ac9eabb7ef6f7f1aeb25dfb5d49bf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb125d68f482397a9accb64a92346df21ac9eabb7ef6f7f1aeb25dfb5d49bf59->leave($__internal_eb125d68f482397a9accb64a92346df21ac9eabb7ef6f7f1aeb25dfb5d49bf59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52280f0d0b240b9b0a05b648c762d118b52af7d60f3a09200b7c36eff6116086 = $this->env->getExtension("native_profiler");
        $__internal_52280f0d0b240b9b0a05b648c762d118b52af7d60f3a09200b7c36eff6116086->enter($__internal_52280f0d0b240b9b0a05b648c762d118b52af7d60f3a09200b7c36eff6116086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52280f0d0b240b9b0a05b648c762d118b52af7d60f3a09200b7c36eff6116086->leave($__internal_52280f0d0b240b9b0a05b648c762d118b52af7d60f3a09200b7c36eff6116086_prof);

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
