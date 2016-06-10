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
        $__internal_8b03b42946bf6309048ec0f933847257515ba1c38945a780f1e87f48e5c20156 = $this->env->getExtension("native_profiler");
        $__internal_8b03b42946bf6309048ec0f933847257515ba1c38945a780f1e87f48e5c20156->enter($__internal_8b03b42946bf6309048ec0f933847257515ba1c38945a780f1e87f48e5c20156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b03b42946bf6309048ec0f933847257515ba1c38945a780f1e87f48e5c20156->leave($__internal_8b03b42946bf6309048ec0f933847257515ba1c38945a780f1e87f48e5c20156_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_180654f416ba0f1f573eb1260f1138c368e57272b24c4d6119abf31ce678b340 = $this->env->getExtension("native_profiler");
        $__internal_180654f416ba0f1f573eb1260f1138c368e57272b24c4d6119abf31ce678b340->enter($__internal_180654f416ba0f1f573eb1260f1138c368e57272b24c4d6119abf31ce678b340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_180654f416ba0f1f573eb1260f1138c368e57272b24c4d6119abf31ce678b340->leave($__internal_180654f416ba0f1f573eb1260f1138c368e57272b24c4d6119abf31ce678b340_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1afd853a91bd8ce7387b2760d8348d9eb4cef348c233aee7ea8763ae2379486 = $this->env->getExtension("native_profiler");
        $__internal_b1afd853a91bd8ce7387b2760d8348d9eb4cef348c233aee7ea8763ae2379486->enter($__internal_b1afd853a91bd8ce7387b2760d8348d9eb4cef348c233aee7ea8763ae2379486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1afd853a91bd8ce7387b2760d8348d9eb4cef348c233aee7ea8763ae2379486->leave($__internal_b1afd853a91bd8ce7387b2760d8348d9eb4cef348c233aee7ea8763ae2379486_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c98268246adc4330cda408d0b69d5644f014011c2ef2c14aff0048f1d8608d4 = $this->env->getExtension("native_profiler");
        $__internal_8c98268246adc4330cda408d0b69d5644f014011c2ef2c14aff0048f1d8608d4->enter($__internal_8c98268246adc4330cda408d0b69d5644f014011c2ef2c14aff0048f1d8608d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c98268246adc4330cda408d0b69d5644f014011c2ef2c14aff0048f1d8608d4->leave($__internal_8c98268246adc4330cda408d0b69d5644f014011c2ef2c14aff0048f1d8608d4_prof);

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
