<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a53df92fd82faf3246feded0683c9fdcf3090a8ccf4caea1122ea06d2f1bf4cc extends Twig_Template
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
        $__internal_a475306d7881ecbe73e1c218ad7c361c7db3d0d805e1406932385db9fc3751f5 = $this->env->getExtension("native_profiler");
        $__internal_a475306d7881ecbe73e1c218ad7c361c7db3d0d805e1406932385db9fc3751f5->enter($__internal_a475306d7881ecbe73e1c218ad7c361c7db3d0d805e1406932385db9fc3751f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a475306d7881ecbe73e1c218ad7c361c7db3d0d805e1406932385db9fc3751f5->leave($__internal_a475306d7881ecbe73e1c218ad7c361c7db3d0d805e1406932385db9fc3751f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0a68b88036e55740da216a568ecc22b31b0749810cb327375403c188f93a0e4 = $this->env->getExtension("native_profiler");
        $__internal_d0a68b88036e55740da216a568ecc22b31b0749810cb327375403c188f93a0e4->enter($__internal_d0a68b88036e55740da216a568ecc22b31b0749810cb327375403c188f93a0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0a68b88036e55740da216a568ecc22b31b0749810cb327375403c188f93a0e4->leave($__internal_d0a68b88036e55740da216a568ecc22b31b0749810cb327375403c188f93a0e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48563e89b7f0a443c33bb09a4794fd2d01849c66fc5b1d5944873b20a96f9202 = $this->env->getExtension("native_profiler");
        $__internal_48563e89b7f0a443c33bb09a4794fd2d01849c66fc5b1d5944873b20a96f9202->enter($__internal_48563e89b7f0a443c33bb09a4794fd2d01849c66fc5b1d5944873b20a96f9202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_48563e89b7f0a443c33bb09a4794fd2d01849c66fc5b1d5944873b20a96f9202->leave($__internal_48563e89b7f0a443c33bb09a4794fd2d01849c66fc5b1d5944873b20a96f9202_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8f25a6253a655f912bb24546b7613d8cfcf04d4020e3fc02f23f16bec958040 = $this->env->getExtension("native_profiler");
        $__internal_a8f25a6253a655f912bb24546b7613d8cfcf04d4020e3fc02f23f16bec958040->enter($__internal_a8f25a6253a655f912bb24546b7613d8cfcf04d4020e3fc02f23f16bec958040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a8f25a6253a655f912bb24546b7613d8cfcf04d4020e3fc02f23f16bec958040->leave($__internal_a8f25a6253a655f912bb24546b7613d8cfcf04d4020e3fc02f23f16bec958040_prof);

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
