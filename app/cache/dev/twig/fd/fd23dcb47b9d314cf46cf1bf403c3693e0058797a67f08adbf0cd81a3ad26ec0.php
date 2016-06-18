<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b8693eb806b3b66d5de21741ec3597634f91b97306671084859ad7e5d4751996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_cedf80ffb1a69d86f18a3f7aeab510f4c05af001935dbbcdf23ee9ec8abfa166 = $this->env->getExtension("native_profiler");
        $__internal_cedf80ffb1a69d86f18a3f7aeab510f4c05af001935dbbcdf23ee9ec8abfa166->enter($__internal_cedf80ffb1a69d86f18a3f7aeab510f4c05af001935dbbcdf23ee9ec8abfa166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedf80ffb1a69d86f18a3f7aeab510f4c05af001935dbbcdf23ee9ec8abfa166->leave($__internal_cedf80ffb1a69d86f18a3f7aeab510f4c05af001935dbbcdf23ee9ec8abfa166_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4e5e166e64dbdeaf7184080b98c806830710b4ad5cb5d4867c02c4a568c42ee = $this->env->getExtension("native_profiler");
        $__internal_a4e5e166e64dbdeaf7184080b98c806830710b4ad5cb5d4867c02c4a568c42ee->enter($__internal_a4e5e166e64dbdeaf7184080b98c806830710b4ad5cb5d4867c02c4a568c42ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4e5e166e64dbdeaf7184080b98c806830710b4ad5cb5d4867c02c4a568c42ee->leave($__internal_a4e5e166e64dbdeaf7184080b98c806830710b4ad5cb5d4867c02c4a568c42ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1c57ab707a3b1b33018d4037c2504f1abf060834500b195b551eff1534bc22c = $this->env->getExtension("native_profiler");
        $__internal_e1c57ab707a3b1b33018d4037c2504f1abf060834500b195b551eff1534bc22c->enter($__internal_e1c57ab707a3b1b33018d4037c2504f1abf060834500b195b551eff1534bc22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1c57ab707a3b1b33018d4037c2504f1abf060834500b195b551eff1534bc22c->leave($__internal_e1c57ab707a3b1b33018d4037c2504f1abf060834500b195b551eff1534bc22c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea2854e4fc70d1ea4f6286df7960ab19d8bfa951a90c9e3dbb7c06e33bbba85e = $this->env->getExtension("native_profiler");
        $__internal_ea2854e4fc70d1ea4f6286df7960ab19d8bfa951a90c9e3dbb7c06e33bbba85e->enter($__internal_ea2854e4fc70d1ea4f6286df7960ab19d8bfa951a90c9e3dbb7c06e33bbba85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea2854e4fc70d1ea4f6286df7960ab19d8bfa951a90c9e3dbb7c06e33bbba85e->leave($__internal_ea2854e4fc70d1ea4f6286df7960ab19d8bfa951a90c9e3dbb7c06e33bbba85e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
