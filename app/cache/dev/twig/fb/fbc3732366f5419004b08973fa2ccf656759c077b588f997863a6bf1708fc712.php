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
        $__internal_b738b3b8c00ca814fd97cae40608d6048663fa21f8d19a3529910600c04e7f4f = $this->env->getExtension("native_profiler");
        $__internal_b738b3b8c00ca814fd97cae40608d6048663fa21f8d19a3529910600c04e7f4f->enter($__internal_b738b3b8c00ca814fd97cae40608d6048663fa21f8d19a3529910600c04e7f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b738b3b8c00ca814fd97cae40608d6048663fa21f8d19a3529910600c04e7f4f->leave($__internal_b738b3b8c00ca814fd97cae40608d6048663fa21f8d19a3529910600c04e7f4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_241ca7d17d3dc83757259f3092570c38feb0d68740136153a4b13a39c3a348d2 = $this->env->getExtension("native_profiler");
        $__internal_241ca7d17d3dc83757259f3092570c38feb0d68740136153a4b13a39c3a348d2->enter($__internal_241ca7d17d3dc83757259f3092570c38feb0d68740136153a4b13a39c3a348d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_241ca7d17d3dc83757259f3092570c38feb0d68740136153a4b13a39c3a348d2->leave($__internal_241ca7d17d3dc83757259f3092570c38feb0d68740136153a4b13a39c3a348d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9d34fbce650bd3159b63c0e612d9e9828450c7f22af1ffc13bc7224b7e0b720 = $this->env->getExtension("native_profiler");
        $__internal_c9d34fbce650bd3159b63c0e612d9e9828450c7f22af1ffc13bc7224b7e0b720->enter($__internal_c9d34fbce650bd3159b63c0e612d9e9828450c7f22af1ffc13bc7224b7e0b720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9d34fbce650bd3159b63c0e612d9e9828450c7f22af1ffc13bc7224b7e0b720->leave($__internal_c9d34fbce650bd3159b63c0e612d9e9828450c7f22af1ffc13bc7224b7e0b720_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b145b779daa7be009453419a627936a0b6d27d42ba872d9e09cd2146eef84a0 = $this->env->getExtension("native_profiler");
        $__internal_3b145b779daa7be009453419a627936a0b6d27d42ba872d9e09cd2146eef84a0->enter($__internal_3b145b779daa7be009453419a627936a0b6d27d42ba872d9e09cd2146eef84a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b145b779daa7be009453419a627936a0b6d27d42ba872d9e09cd2146eef84a0->leave($__internal_3b145b779daa7be009453419a627936a0b6d27d42ba872d9e09cd2146eef84a0_prof);

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
